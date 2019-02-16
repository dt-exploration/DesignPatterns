<?php

class Singleton
{
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

}

//$objekat = new Singleton();
//Fatal error: Uncaught Error: Call to private Singleton::__construct() from
//invalid context

$objekat = Singleton::getInstance();
var_dump($objekat);

 ?>
