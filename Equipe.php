<?php

// Class
class Equipe
{
    private $nomEquipe;
    private $pays;


    // Construct
    public function __construct($nomEquipe, $pays){
        $this->nomEquipe = $nomEquipe;
        $this->pays = $pays;
    }
}
