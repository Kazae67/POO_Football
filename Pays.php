<?php

// Class
Class Pays
{
    private $nomPays;
    private $clubs;

    // Construct
    public function __Construct ($nomPays)
    {
        $this->nomPays = $nomPays;
        $this->clubs = [];
    }

    // Ajouter
    public function ajouterClub($club)
    {
        $this->clubs[] = $club;
    }

    // Getters
    public function getNomPays(){
        return $this->nomPays;
    }

    public function getClubs(){
        return $this->clubs;
    }

    // GET INFO
    public function getInfo()
    {
        $result = "<b>".strtoupper($this)."</b><br>";
        foreach ($this->clubs as $club)
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