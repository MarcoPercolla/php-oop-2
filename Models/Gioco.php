<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Materiale.php';

class Gioco extends Prodotto
{
    // silicone corda corno
    use Materiale;
    // peluche, masticazione, rumoroso
    public $tipologia;

    public function __construct($name, $price, $src, Categoria $categoria,$materiale,$tipologia)
    {
        parent::__construct($name, $price,$src,$categoria);
        $this->materiale = $materiale;
        $this->tipologia = $tipologia;
    }
}