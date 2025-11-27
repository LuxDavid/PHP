<?php 

$beer = new Beer("Delirium", 15);

function showInfo(Product $product){
    echo "$ ".$product->calculatePrice();
}

showInfo($beer);

echo $beer->getName();

abstract class Product{
    protected float $price;
    protected string $name;

    abstract public function calculatePrice() : float;

    public function getName() : string{
        return $this->name;
    }
}

class Beer extends Product{

    const TAX= 1.1;

    public function __construct($name, $price){
        $this->name= $name;
        $this->price= $price;
    }

    public function calculatePrice(): float{
        return $this->price * self::TAX;
    }
}

