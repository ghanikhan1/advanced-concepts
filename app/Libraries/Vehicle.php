<?php

namespace App\Libraries;

Class Vehicle {

//    private $brand;
//    private $model;
//    private $year;

    public function __construct($brand,$model,$year)
    {
//        $this->brand = $brand;
//        $this->model = $model;
//        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    public function display()
    {
        return [
          'brand' => $this->getBrand(),
          'model' => $this->getModel(),
          'year' => $this->getYear()
        ];
    }
}
