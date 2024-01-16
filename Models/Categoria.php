<?php
class Categoria
{
    // cane gatto
    public $razza;
    

    public function __construct($razza)
    {
        $this->razza = $razza;
        
        
    }

    public function getFullCategory()
    {
        $result = $this->razza ;
        return $result;
    }
}