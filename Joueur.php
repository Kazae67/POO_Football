<?php
class Joueur
{
    private $nom;
    private $prenom;
    private $date_naissance;
    private $nationalite;
    private $clubs;

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

    public function getNationalite(){
        return "Le joueur" . $this . " est de nationnalité " . $this->nationalite . "."; 
    }
}
