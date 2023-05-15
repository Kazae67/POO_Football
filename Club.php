<?php

// Class
class Club
{
    private $nom_club;
    private $pays;


    // Construct
    public function __construct($nom_club, $pays){
        $this->nom_club = $nom_club;
        $this->pays = $pays;
    }
}
