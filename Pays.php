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
    public function nouveauClubDansPays($nouveauClub)
    {
        $this->equipes[] = $nouveauClub;
    }
}