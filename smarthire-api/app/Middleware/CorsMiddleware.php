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
        return $next($request, $response)
            ->withHeader('Access-Control-Allow-Origin', $this->_settings['origin'])
            ->withHeader('Access-Control-Allow-Headers', $this->_settings['headers'])
            ->withHeader('Access-Control-Allow-Methods', $this->_settings['methods']);
    }
}