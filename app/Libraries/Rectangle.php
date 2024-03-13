<?php

namespace App\Libraries;

Class Rectangle extends Shape{

    private $length;
    private $width;

    public function __construct($length,$width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}
