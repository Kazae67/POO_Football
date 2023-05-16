<?php

// Class
class Carriere{
    private $joueur;
    private $club;
    private $annee_contrat;
 
    // Construct
    public function __construct(Joueur $joueur, Club $club, $annee_contrat){
        $this->joueur = $joueur;
        $this->joueur->ajouterClub($this);
       

        $this->club= $club;
        $this->club->ajouterJoueur($this->joueur);

        $this->annee_contrat = $annee_contrat;
        
    }

    // TO STRING
    public function __toString()
    {
        return $this->club.  " (" . $this->annee_contrat . ")";
    }
}

?>