<?php
class Nationality
{
    private $nomNationalite;
    private $joueurs;

    public function __Construct($nomNationalite)
    {
        $this->nomNationalite = $nomNationalite;
        $this->joueurs = [];
    }
}