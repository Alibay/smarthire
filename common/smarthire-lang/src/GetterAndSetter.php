<?php

namespace Smarthire\Lang;

trait GetterAndSetter
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

        if (!strpos('set', $name)) {
            $propertyName = lcfirst(substr($name, 3));

            if ($propertyName && property_exists($this, $propertyName)) {
                $this->$propertyName = $arguments;
                return $this;
            }
        }

        return $this->$name($arguments);
    }
}