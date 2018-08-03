<?php

namespace App\Auth;

use Doctrine\ORM\EntityRepository;
use Smarthire\Security\PasswordEncoder;

class Auth
{

    private $_passwordEncoder;

    private $_userRepository;

    public function __construct(
        PasswordEncoder $passwordEncoder,
        EntityRepository $userRepository
    )
    {
        $this->_passwordEncoder = $passwordEncoder;
        $this->_userRepository = $userRepository;
    }

    public function attempt(string $email, string $password): bool
    {
        $user = $this->_userRepository->findOneByEmail($email);
        if (!$user) {
            return false;
        }

        return hash_equals($this->_passwordEncoder->encode($password), $user->getPassword());
    }
}