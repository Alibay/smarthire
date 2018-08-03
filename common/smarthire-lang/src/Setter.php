<?php

namespace Smarthire\Lang;

trait Setter
{
    /**
     * @param $name
     * @param $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
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