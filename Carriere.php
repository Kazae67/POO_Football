<?php

// Class
class Carriere{
    private $joueur;
    private $club;
    private $debut_contrat;
    private $fin_contrat;


    // Construct
    public function __construct(Joueur $joueur, Club $club, $debut_contrat, $fin_contrat){
        $this->joueur = $joueur;
        $this->club= $club;
        $this->debut_contrat = $debut_contrat;
        $this->fin_contrat = $fin_contrat;
    }
}

?>