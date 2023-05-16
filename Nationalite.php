<?php

// Class
class Nationalite
{
    private $nomNationalite;
    private $joueurs;

    // Construct
    public function __Construct($nomNationalite)
    {
        $this->nomNationalite = $nomNationalite;
        $this->joueurs = [];
    }

    // Getters
    public function getNomNationalite(){
        return $this->nomNationalite;
    }

    public function getJoueurs(){
        return $this->joueurs;
    }

    // TO STRING
    public function __toString()
    {
        return $this->nomNationalite;
    }

}