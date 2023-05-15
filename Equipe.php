<?php
class Club
{
    private $nomEquipe;
    private $pays;

    public function __construct($nomEquipe, $pays){
        $this->nomEquipe = $nomEquipe;
        $this->pays = $pays;
    }
}