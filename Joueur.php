<?php
class Player
{
    private $nom;
    private $prenom;
    private $sexe;
    private $date_naissance;
    private $nationalite;
    private $clubs;

    public function __construct($nom, $prenom, $sexe, $date_naissance, $nationalite){
        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->sexe = $sexe;
        $this->date_naissance = $date_naissance;
        $this->nationalite = $nationalite;
        $this->clubs = [];
    }
}