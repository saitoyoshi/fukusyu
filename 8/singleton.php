<?php


class Singleton {
    private static $instance = null;
    private function __construct() {
        // DB接続処理など
    }
    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}
$one = Singleton::getInstance();
$another = Singleton::getInstance();

var_dump($one === $another);
