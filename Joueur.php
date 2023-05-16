<?php

// Class
class Joueur
{
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $nationalite;
    private array $carrieres;

    // Construct
    public function __construct($nom, $prenom, $dateNaissance, Nationalite $nationalite){
        $this->nom= $nom;
        $this->prenom= $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->nationalite = $nationalite;
        $this->carrieres = [];
    }

    // Ajouter
    public function ajouterCarriere($carriere){
        $this->carrieres[] = $carriere;
    }

    // Getters
    public function getNom(){
        return $this->nom;
    }
    
    public function getPrenom(){
        return $this->prenom;
    }

    public function getNationalite(){
        return $this->nationalite;
    }

    public function getCarrieres(){
        return $this->carrieres;
    }
    
    // Methode
    public function getDateNaissance()
    {
        $now = new DateTime();
        $bd = new DateTime($this->dateNaissance);
        $age = date_diff($now, $bd);
        return $age->y;
    }

    // GET INFO
    public function getInfo()
    {
        $result = "<b>".strtoupper($this) . "</b><br> " . $this->nationalite . " " . "- " . $this->getDateNaissance() . " ans<br>" ; // Getter sert à récupérer la valeur d'un attribut d'une classe (depuis l'extérieur de cette classe)
        foreach ($this->carrieres as $carriere) {
            $result .= $carriere->getClub(). " (";
            $result .= $carriere->getAnneeContrat() .") <br>";
        }
        return $result.  "<br>";
    }

    // TO STRING
    public function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }
}

