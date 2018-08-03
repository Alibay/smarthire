<?php

namespace App\Entity;

use Smarthire\Lang\GetterAndSetter;

/**
 * Class Company
 * @package App\Entity
 *
 * @Entity
 * @Table(schema="public", name="roles")
 */
class Role
{

    use GetterAndSetter;

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
     * @Column(type="string", length=255, nullable=false)
     */
    private $name;
}