<?php

namespace App\Libraries;

Class Circle {

    private $radius;
    protected $pi = 3.15;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return $this->pi * ($this->radius * 2);
    }

    public function getCircumfrance()
    {
        return 2 + ($this->pi * $this->radius);
    }
}
