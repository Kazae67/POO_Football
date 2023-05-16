<?php

// Class
class Club
{
    private string $nom;
    private Pays $pays;
    private array $carrieres; // Tableau de Carriere

    // Construct
    public function __construct($nom, Pays $pays){
        $this->nom = $nom;
        $this->pays = $pays;
        $this->pays->ajouterClub($this);
        $this->carrieres = [];
    }

    // Ajouter
    public function ajouterCarriere($carriere)
    {
        $this->carrieres[] = $carriere;
    }

    // Getters
    public function getNom(){
        return $this->nom;
    }

    public function getPays(){
        return $this->pays;
    }
    public function getCarrieres(){
        return $this->carrieres;
    }

    // Methode
    public function getJoueurs()
    {
        $result = "<b>".strtoupper($this)."</b><br>";
        foreach ($this->carrieres as $carriere) {
            $result .= $carriere->getJoueur(). "<br>"; 
        }
        return $result. "<br>";
    }

    // TO STRING
    public function __toString()
    {
        return $this->nom;
    }
}
