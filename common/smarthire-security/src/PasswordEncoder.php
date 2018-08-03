<?php

namespace Smarthire\Security;

interface PasswordEncoder
{
    public function encode( string $plain ): string;
}