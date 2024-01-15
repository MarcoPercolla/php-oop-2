<?php
class Categoria
{
    // cane gatto
    public $razza;
    // s m l xl
    public $stazza;
    // giovane adulto anziano
    public $eta;

    public function __construct($razza, $stazza, $eta)
    {
        $this->razza = $razza;
        $this->stazza = $stazza;
        $this->eta = $eta;
        
    }

    public function getFullCategory()
    {
        $result = $this->razza . ", " . $this->stazza . " , " . $this->eta ;
        return $result;
    }
}