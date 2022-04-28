<?php

class Singleton {

    private static $instance;
    private $my_data;

    private function __construct()
    {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self();

        }

        return self::$instance;
    }

    private function __clone()
    {
    }

    public function setMyData($data) {
        $this->my_data = $data;
    }

}