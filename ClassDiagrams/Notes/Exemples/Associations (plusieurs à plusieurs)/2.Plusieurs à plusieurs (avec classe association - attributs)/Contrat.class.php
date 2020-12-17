<?php

include_once "Personne.class.php";
include_once "Societe.class.php";


class Contrat {
    private $dateEmbauche;
    private $salaire;

    // on a rajouté les types de données pour les définitions des propriétés
    private Personne $employe; // un objet de la classe Personne
    private Societe $employeur; // un objet de la classe Societe

    public function __construct ($salaire, $dateEmbauche, Personne $employe, Societe $employeur){
        $this->salaire = $salaire;
        $this->dateEmbauche = $dateEmbauche;
        // on affecte les dépendances
        $this->employe = $employe;
        $this->employeur = $employeur;

        // créer les liens: rajouter le contrat à la liste de contrats de la Personne
        // $employe->contrats[] = $this;
        // on peut le faire aussi avec une méthode :
        $employe->addContrat($this);
        
        // créer les liens: rajouter le contrat à la liste de contrats de la Societé
        // $employeur->contrats[] = $this;
        // on peut le faire aussi avec une méthode :
        $employeur->addContrat($this);
        
    }

    /**
     * Get the value of dateEmbauche
     */ 
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get the value of employe
     */ 
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set the value of employe
     *
     * @return  self
     */ 
    public function setEmploye(Personne $employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get the value of employeur
     */ 
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * Set the value of employeur
     *
     * @return  self
     */ 
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}