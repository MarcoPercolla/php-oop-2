<?php

require_once __DIR__ . '/Cliente.php';

class UtenteRegistrato extends Cliente
{
    public $sconto;
    

    public function __construct($name, $sconto)
    {
        parent::__construct($name);
        $this->sconto = $sconto;
        
    }
    

    
}