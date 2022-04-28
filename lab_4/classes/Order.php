<?php

class Order {
    public $products;
    public function __construct($array){

        foreach ($array as $product) {
            if (!$product instanceof Shower && !$product instanceof Window){

                throw new InvalidArgumentException();
            }
        }
        $this->products=$array;
    }

    private function amount_order(){
        $i=0;
        foreach ($this->products as $product){
            $i += $product->getMyPrice();
        }
        return $i;
    }
    public function __toString()
    {
        return "Вартість вашого замовлення: {$this->amount_order()}";// TODO: Implement __toString() method.
    }
    public function add($data) {
        if (!$data instanceof Shower && !$data instanceof Window){

            throw new InvalidArgumentException();
        }
        array_push($this->products, $data);
    }
}