<?php

// Class
class Nationalite
{
    private $nom_nationalite;
    private $joueurs;

    // Construct
    public function __Construct($nom_nationalite)
    {
        $this->nom_nationalite = $nom_nationalite;
        $this->joueurs = [];
    }
}