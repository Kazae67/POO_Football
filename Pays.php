<?php

// Class
Class Pays
{
    private string $nomPays;
    private array $clubs;

    // Construct
    public function __construct (string $nomPays)
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
    public function getNomPays():string{
        return $this->nomPays;
    }

    public function getClubs():array{
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