<?php

class Societe {
    public $nom;

    // public List<Personne> employes;   // C#
    public $employes = []; // array d'objets Personne

    // public $fondatrice; // objet de la classe Personne

    public function __construct($nom){
        $this->nom = $nom;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of employes
     */ 
    public function getEmployes()
    {
        return $this->employes;
    }

    /**
     * Set the value of employes
     *
     * @return  self
     */ 
    public function setEmployes($employes)
    {
        $this->employes = $employes;

        return $this;
    }

    // méthode rajouter Employe propre
    public function addEmploye($employe){
        $this->employes[] = $employe;
    }
    public function showEmployes(){
        foreach ($this->employes as $employe) {
            $employe->showPersonne();
        }
    }
}