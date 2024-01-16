<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Materiale.php';

class Cuccia extends Prodotto
{
    // silicone corda corno
    use Materiale;
    // peluche, masticazione, rumoroso
    public $dimensione;

    public function __construct($name, $price, $src, Categoria $categoria,$materiale,$dimensione)
    {
        parent::__construct($name, $price,$src,$categoria);
        $this->materiale = $materiale;
        $this->dimensione = $dimensione;
    }
}