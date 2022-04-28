<?php

class Window extends Product
{
    public $package_window;
    public function __construct($name_product, $description, $price, $package_window)
    {
        parent::__construct($name_product, $description, $price);
        $this->package_window = $package_window;
    }
    public function __toString()
    {
        return parent::__toString()."\nСклопакет: ".(empty($this->package_window)? "Не вказано": $this->package_window); // TODO: Change the autogenerated stub
    }
    public function getMyPrice(){
        return $this->getPrice();
    }
    public function getPackageWindow(){
        return $this->package_window;
    }
    public function setPackageWindow($package_window){
        $this->package_window=$package_window;
    }
}