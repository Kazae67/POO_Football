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
}