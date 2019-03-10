<?php

class Automobile {

    private $car_make;
    private $car_model;

    public function __construct($make, $model)
    {
        $this->car_make = $make;
        $this->car_model = $model;
    }

    public function getMakeAndModel()
    {
        return array($this->car_make, $this->car_model);
    }

}

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make,$model);
    }
}

$auto = AutomobileFactory::create('audi', 'r8');
print_r($auto->getMakeAndModel());


?>
