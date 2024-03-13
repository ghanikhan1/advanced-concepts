<?php

namespace App\Libraries;

class Rectangle
{
    private $lenght;
    private $width;

    public function __construct($lenght, $width)
    {
        $this->lenght = $lenght;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->lenght * $this->width;
    }

    public function getPerimeter()
    {
        return 2 * ($this->lenght + $this->width);
    }
}
