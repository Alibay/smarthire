<?php

namespace Smarthire\Security;

/**
 * Class Md5PasswordEncoder
 * @package Smarthire\Security
 */
class Md5PasswordEncoder implements PasswordEncoder
{

    public function encode(string $plain): string
    {
        return md5($plain);
    }
}