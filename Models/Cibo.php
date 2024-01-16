<?php

require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{
    public $ingredienti;
    public $scadenza;

    public function __construct($name, $price, $src, Categoria $categoria, array $ingredienti,$scadenza)
    {
        parent::__construct($name, $price,$src,$categoria);
        $this->ingredienti = $ingredienti;
        $this->scadenza = $scadenza;
    }
}