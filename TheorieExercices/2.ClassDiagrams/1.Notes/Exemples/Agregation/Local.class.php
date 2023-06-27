<?php

class Local {
    public $nom;

    public $pcs = []; // array de Pcs

    // manque le videoproj

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

    
    // méthode rajouter PC propre
    public function addPC($pc){
        $this->pcs[] = $pc;
    }
    public function showPcs(){
        foreach ($this->pcs as $pc) {
            $pc->showPersonne();
        }
    }

    /**
     * Get the value of pcs
     */ 
    public function getPcs()
    {
        return $this->pcs;
    }

    /**
     * Set the value of pcs
     *
     * @return  self
     */ 
    public function setPcs($pcs)
    {
        if (count($pcs)<15){
            throw new Exception ("pas assez de pcs dans la liste");
        }
        else {
            $this->pcs = $pcs;
        }
        return $this;
    }
}