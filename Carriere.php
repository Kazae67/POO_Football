<?php

// Class
class Carriere{
    private $club;
    private $joueur;
    private $debut_contrat;
    private $fin_contrat;


    // Construct
    public function __construct(Club $club, Joueur $joueur, $debut_contrat, $fin_contrat){
        $this->club= $club;
        $this->joueur = $joueur;
        $this->debut_contrat = $debut_contrat;
        $this->fin_contrat = $fin_contrat;
    }
}

?>