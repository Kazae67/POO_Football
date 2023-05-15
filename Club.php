<?php

// Class
class Club
{
    private $nom_club;
    private $pays;
    private $carrieres;

    // Construct
    public function __construct($nom_club, Pays $pays){
        $this->nom_club = $nom_club;
        $this->pays = $pays;
        $this->pays->ajouterClubsDansPays($this);
        $this->carrieres = [];
    }

    // Ajouter
    public function ajouterJoueur($nouveauJoueur)
    {
        $this->carrieres[] = $nouveauJoueur;
    }

    // GETTERS 
    public function getJoueurs()
    {
        $result = "<b>".strtoupper($this)."</b><br>";
        foreach ($this->carrieres as $joueurs) {
            $result .= $joueurs . "<br>"; 
        }
        return $result. "<br>";
    }


    // TO STRING
    public function __toString()
    {
        return $this->nom_club;
    }
}
