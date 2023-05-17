<?php

// Class
class Nationalite
{
    private string $nomNationalite;
    private array $joueurs;

    // Construct
    public function __construct(string $nomNationalite){
        $this->nomNationalite = $nomNationalite;
        $this->joueurs = [];
    }

    // Getters
    public function getNomNationalite():string{
        return $this->nomNationalite;
    }

    public function getJoueurs():array{
        return $this->joueurs;
    }

    // TO STRING
    public function __toString(){
        return $this->nomNationalite;
    }

}