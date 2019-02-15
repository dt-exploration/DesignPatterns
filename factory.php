<?php

class Automobile {

    private $bike_make;
    private $bike_model;

    public function __construct($make, $model)
    {
        $this->bike_make = $make;
        $this->bike_model = $model;
    }

    public function getMakeAndModel()
    {
        return array($this->bike_make, $this->bike_model);

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
