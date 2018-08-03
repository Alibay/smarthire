<?php

namespace Smarthire\Config;

class Config
{
    private $_data;

    private $_settings;

    private $_delimiter;

    public function __construct(array $data = [], array $settings = [])
    {
        $this->_data = $data;
        $this->_settings = $settings;
        $this->_delimiter = '.';
    }

    public function get($key, $default = null)
    {
        $path = explode($this->_delimiter, $key);
        $data = $this->_data;

        foreach ($path as $step) {
            if (!array_key_exists($step, $data)) {
                return $default;
            }

            $data = $data[$step];
        }

        return $data;
    }
}