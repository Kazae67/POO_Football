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

    // Ajouter
    public function ajouterClub($nouveauClub){
        $this->clubs[] = $nouveauClub;
    }

    // Getters
    public function getClub()
    {
        $result =  "Le joueur " . $this . " fait partie des équipes : <br>";
        foreach ($this->clubs as $club) {
            $result .= $club . "<br>"; 
        }
        return $result;
    }

    public function getDate_Naissance()
    {
        $now = new DateTime();
        $bd = new DateTime($this->date_naissance);
        $age = date_diff($now, $bd);
        return $age->y;
    }

    public function getNationalite(){
        return "Joueur '" . $this . "' est de nationnalité : " . $this->nationalite . "."; 
    }

    // GetInfo
    public function getInfo()
    {
        $result = $this . " Né " . $this->date_naissance . " " . $this->nationalite . " " .  " :<br>";
        foreach ($this->clubs as $club) {
            $result .= $club . "<br>";
        }
        return $result ."<br>";
    }


}

