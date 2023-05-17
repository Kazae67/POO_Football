<?php

// Class
class Carriere{
    private Joueur $joueur;
    private Club $club;
    private $anneeContrat;
 
    // Construct
    public function __construct(Joueur $joueur, Club $club, $anneeContrat){
        $this->joueur = $joueur;
        $this->joueur->ajouterCarriere($this);
       
        $this->club= $club;
        $this->club->ajouterCarriere($this); // "THIS" au moment où c'est lu c'est l'instance "en cours" / sur le moment de la classe 

        $this->anneeContrat = $anneeContrat;       
    }

    // Getters
    public function getJoueur():string{
        return $this->joueur;
    }
    
    public function getClub():string{
        return $this->club;
    }
    
    public function getAnneeContrat(){
        return $this->anneeContrat;
    }

    // TO STRING 
    public function __toString(){
        return $this->club.  " (" . $this->anneeContrat . ")";
        //return "Je suis une carrière == le lien entre le club " . $this->club.  " et le joueur " . $this->joueur . " pour l'année " . $this->anneeContrat . "<br />";
    }
}

?>