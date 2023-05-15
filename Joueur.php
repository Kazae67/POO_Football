<?php
class Player
{
    private $nom;
    private $prenom;
    private $sexe;
    private $birthday;
    private $nationalite;
    private $equipe;

    public function __construct($nom, $prenom, $sexe, $birthday, $nationalite, $equipe){
        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->sexe = $sexe;
        $this->birthday = $birthday;
        $this->nationalite = $nationalite;
        $this->equipe = $equipe;
    }
}