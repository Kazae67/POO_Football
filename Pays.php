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
    public function nouveauClubsDansPays($equipe)
    {
        $this->equipes[] = $equipe;
    }
}