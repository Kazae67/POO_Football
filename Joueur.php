<?php

// Class
class Joueur
{
    private $nom;
    private $prenom;
    private $date_naissance;
    private $nationalite;
    private $clubs;

    // Construct
    public function __construct($nom, $prenom, $date_naissance, nationalite $nationalite){
        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->date_naissance = $date_naissance;
        $this->nationalite = $nationalite;
        $this->clubs = [];
    }

    // Ajouter
    public function ajouterClub($nouveauClub){
        $this->clubs[] = $nouveauClub;
    }

    // GETTERS
    public function getDate_Naissance()
    {
        $now = new DateTime();
        $bd = new DateTime($this->date_naissance);
        $age = date_diff($now, $bd);
        return $age->y;
    }

    // TO STRING
    public function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }
}

