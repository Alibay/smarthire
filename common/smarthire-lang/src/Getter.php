<?php

namespace Smarthire\Lang;

trait Getter
{
    /**
     * calls Class::$name();
     *
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->__call($name);
    }

    /**
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (!strpos('get', $name)) {
            $propertyName = lcfirst(substr($name, 3));

            if ($propertyName && property_exists($this, $propertyName)) {
                return $this->$propertyName;
            }
        }

        return $this->$name($arguments);
    }
}