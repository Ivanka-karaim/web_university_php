<?php

class Product
{
    public $name_product;
    public $description;
    public $price;
    public function __construct($name_product, $description, $price){
        $this->name_product=$name_product;
        $this->description=$description;
        $this->price=$price;
    }
    public function __toString()
    {
        return $this->getMe().$this->name_product." \nОпис ".$this->description." \nЦіна ".$this->price;
    }
    protected function getPrice(){
        return $this->price;
    }
    private function getMe(){
        return "Продукт: ";
    }

}