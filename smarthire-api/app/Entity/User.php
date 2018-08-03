<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Smarthire\Lang\Getter;
use Smarthire\Lang\Setter;

/**
 * Class User
 * @package App\Entity
 *
 * @Entity
 * @Table(schema="public", name="users")
 */
class User
{

    use Getter;
    use Setter;

    /**
     * @var integer
     *
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string", name="first_name", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     * @Column(type="string", name="last_name", length=255, nullable=false)
     */
    private $lastName;

    private $email;

    private $password;

    private $created;

    private $lastLogin;

    private $specialist;

    private $roles;
}