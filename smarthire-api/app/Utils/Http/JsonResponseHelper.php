<?php

namespace App\Utils\Http;

use Slim\Http\Response;

final class JsonResponseHelper
{
    const STATUS_OK = 200;
    const STATUS_CREATED = 201;
    const STATUS_NO_CONTENT = 204;
    const STATUS_BAD_REQUEST = 400;
    const STATUS_UNAUTHORIZED = 401;
    const STATUS_FORBIDDEN = 403;
    const STATUS_NOT_FOUND = 404;
    const STATUS_METHOD_NOT_ALLOWED = 405;
    const STATUS_SERVER_ERROR = 500;

    public static function status(Response $response, $code, $data = null)
    {
        $response = $response->withStatus($code);
        if ($data) {
            $response = $response->withJson($data);
        }

        return $response;
    }

    public static function ok(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_OK, $data);
    }

    public static function created(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_CREATED, $data);
    }

    public static function noContent(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_NO_CONTENT, $data);
    }

    public static function badRequest(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_BAD_REQUEST, $data);
    }

    public static function unauthorized(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_UNAUTHORIZED, $data);
    }

    public static function forbidden(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_FORBIDDEN, $data);
    }

    public static function notFound(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_NOT_FOUND, $data);
    }

    public static function methodNotAllowed(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_METHOD_NOT_ALLOWED, $data);
    }

    public static function serverError(Response $response, $data = null)
    {
        return self::status($response, self::STATUS_SERVER_ERROR, $data);
    }
}