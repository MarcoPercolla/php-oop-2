<?php


class cliente
{
    public $name;
    

    public function __construct($name)
    {
        $this->name = $name; 
        
    }

    public function getName()
    {
        return $this->name;
    }



    public function setName($nuovoNome)
    {
        $this->name = $nuovoNome;
    }

}