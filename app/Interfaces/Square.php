<?php

namespace App\Interfaces;

Class Square implements Resizeable {

    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function resize($percentage)
    {
        return $this->side = $this->side * ($percentage/100);
    }
}
