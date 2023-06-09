<?php

// Class
class Club
{
    private string $nom;
    private Pays $pays;
    private array $carrieres; // Tableau de Carriere

    // Construct
    public function __construct(string $nom, Pays $pays){
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
    public function getNom():string{
        return $this->nom;
    }

    public function getPays():Pays{
        return $this->pays;
    }
    public function getCarrieres():array{
        return $this->carrieres;
    }

    // Methode
    public function getJoueurs(){
        $result = "<b>".strtoupper($this)."</b><br>";
        foreach ($this->carrieres as $carriere) {
            $result .= $carriere->getJoueur()." - "; 
            $result .= $carriere->getAnneeContrat(). "<br>";
        }
        return $result. "<br>";
    }

    // TO STRING
    public function __toString(){
        return $this->nom;
    }
}
