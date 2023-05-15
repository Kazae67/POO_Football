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
    public function getJoueur()
    {
        $result =  "club '" . $this . "' :<br>";
        foreach ($this->carrieres as $joueurs) {
            $result .= $joueurs . "<br>"; 
        }
        return $result . "<br>";
    }
}