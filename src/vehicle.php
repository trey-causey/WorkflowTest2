<?php

namespace Causey\Model;

class Vehicle
{
    public $numOfWheels;
    public $color;
    public $make;
    public $model;
    public $powerTrain;
    public $year;
    public $mileage;
    public $fuelType;

    public function __construct()
    {
        $this->numOfWheels = 4;
        $this->color = "white";
        $this->make = "Generic";
        $this->model = "Blank";
        $this->powerTrain = "FWD";
        $this->year = 1900;
        $this->mileage = 0;
        $this->fuelType = "gas";
    }

}