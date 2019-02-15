<?php

class Singleton
{
    public static function getInstance()
    {
        static $instance = null;

        if($instance === null) {
            $instance = new static();
        }

    return $instance;
    }

    protected function __construct()
    {

    }

}

class SingletonDete extends Singleton
{

}

$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance());

$another_obj = SingletonDete::getInstance();
var_dump($another_obj === Singleton::getInstance());
var_dump($another_obj === SingletonDete::getInstance());


 ?>
