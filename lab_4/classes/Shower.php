<?php

class Shower extends Product
{
    public $accessories;
    public function __construct($name_product, $description, $price, $accessories)
    {
        parent::__construct($name_product, $description, $price);
        $this->accessories = $accessories;
    }
    public function __toString()
    {
        return parent::__toString()."\nФурнітура: ".(empty($this->accessories)? "Не вказано": $this->accessories);
    }
    public function getMyPrice(){
        return $this->getPrice();
    }
    public function getAccessories()
    {
        return $this->accessories;
    }
    public function setAccessories($accessories) {
        $this->accessories=$accessories;
    }
}