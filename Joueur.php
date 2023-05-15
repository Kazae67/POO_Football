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
    public function __construct($nom, $prenom, $date_naissance, $nationalite){
        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->date_naissance = $date_naissance;
        $this->nationalite = $nationalite;
        $this->clubs = [];
    }

    public function nouveauClub($nouveauClub){
        $this->clubs[] = $nouveauClub;
    }

    // Getters
    public function getClub()
    {
        $result =  "Le joueur " . $this . " fait partie de l'équipe : <br>";
        foreach ($this->clubs as $club) {
            $result .= $club . "<br>"; 
        }
        return $result;
    }

    public function getNationalite(){
        return "Le joueur" . $this . " est de nationnalité " . $this->nationalite . "."; 
    }

    public function getDate_Naissance()
    {
        $now = new DateTime();
        $bd = new DateTime($this->date_naissance);
        $age = date_diff($now, $bd);
        return $age->y;
    }

}

