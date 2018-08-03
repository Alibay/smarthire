<?php

namespace App\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

class CorsMiddleware
{
    private $_settings;

    public function __construct( $settings )
    {
        $this->_settings = $settings;
    }

    public function __invoke(Request $request, Response $response, $next)
    {
        $next($request, $response);
    }
}