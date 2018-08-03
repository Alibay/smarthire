<?php

namespace Smarthire\Security;

/**
 * Class BCryptPasswordEncoder
 * @package Smarthire\Security
 */
class BCryptPasswordEncoder implements PasswordEncoder
{

    public function encode(string $input): string 
    {
        return password_hash($input, PASSWORD_BCRYPT);
    }
}