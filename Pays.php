<?php

// Class
Class Pays
{
    private $nomPays;
    private $equipes;

    // Construct
    public function __Construct ($nomPays)
    {
        $this->nomPays = $nomPays;
        $this->equipes = [];
    }

    // Ajouter
    public function ajouterClubsDansPays($equipe)
    {
        $this->equipes[] = $equipe;
    }

    // Getters
    public function getNomPays(){
        return $this->nomPays;
    }

    public function getEquipes(){
        return $this->equipes;
    }
    
    // GET INFO
    public function getInfo()
    {
        $result = "<b>".strtoupper($this->nomPays)."</b><br>";
        foreach ($this->equipes as $club)
        {
            $result.= $club."<br>";
        }
        return $result."<br>";
    }

    // TO STRING
    public function __toString()
    {
        return $this->nomPays;
    }

}