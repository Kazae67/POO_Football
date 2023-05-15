<?php

// Class
Class Pays
{
    private $nomPays;
    private $equipes;

    // Construct
    public function __Construct ($nomPays)
    {
        $this->nomPays=$nomPays;
        $this->equipes=[];
    }

    public function ajouterClubsDansPays($equipe)
    {
        $this->equipes[] = $equipe;
    }

    public function getInfo()
    {
        $result = $this->nomPays."<br>";
        foreach ($this->equipes as $club)
        {
            $result.= $club."<br>";
        }
    }
}