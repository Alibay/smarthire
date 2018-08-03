<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Smarthire\Lang\Getter;
use Smarthire\Lang\GetterAndSetter;
use Smarthire\Lang\Setter;

/**
 * Class Company
 * @package App\Entity
 *
 * @Entity
 * @Table(schema="public", name="companies")
 */
class Company
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