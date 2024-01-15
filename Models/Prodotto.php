<?php

require_once __DIR__ . '/Categoria.php';

class prodotto
{
    public $name;
    public $price;
    public $src;
    public $categoria;

    public function __construct($name, $price, $src, Categoria $categoria)
    {
        $this->name = $name;
        $this->price = $price;
        $this->src = $src;
        $this->categoria = $categoria;
        
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