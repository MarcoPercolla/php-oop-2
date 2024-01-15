<?php

class prodotto
{
    public $name;
    public $price;
    public $src;

    public function __construct($name, $price, $src)
    {
        $this->name = $name;
        $this->price = $price;
        $this->src = $src;
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }


    public function setName($nuovoNome)
    {
        $this->name = $nuovoNome;
    }

}