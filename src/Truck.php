<?php

namespace Causey\Model;

include 'vehicle.php';

class Truck extends Vehicle
{
    public $bedSize;
    public $isDually;
    public $classECommercial;

    public function __construct($bedSize,$isDually, $classECommercial)
    {
        parent::__construct();

    }

}