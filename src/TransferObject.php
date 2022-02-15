<?php

namespace TheFox\Smtp;

class TransferObject
{
    private $data = [];
    
    public function set(string $name, $value)
    {
        $this->data[$name] = $value;
    }

    public function get(string $name, $default = null)
    {
        return $this->data[$name] ?? $default;
    }
}
