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
 * Class Specialist
 * @package App\Entity
 *
 * @Entity
 * @Table(schema="public", name="specialists")
 */
class Specialist
{
    use GetterAndSetter;
    
    /**
     * @var integer
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string", name="first_name", length=255, nullable=false)
     */
    private $fistName;

    /**
     * @var string
     * @Column(type="string", name="last_name", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFistName()
    {
        return $this->fistName;
    }

    /**
     * @param string $fistName
     */
    public function setFistName($fistName)
    {
        $this->fistName = $fistName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    
}