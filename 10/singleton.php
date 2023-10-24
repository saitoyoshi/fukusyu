<?php

class Singleton {
    private static $instance = null;
    private function __construct(){}
    public static function getInstance(){
        if (is_null(self::$instance)){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}
$instance = Singleton::getInstance();
$anotherInstance = Singleton::getInstance();
var_dump( $instance === $anotherInstance);
