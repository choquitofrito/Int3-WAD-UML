<?php

class Societe {

    // propriétés
    public string $nom;
    public string $domaine;

    public array $arrayEmployes = [];

    // méthodes
    public function afficher() : void {
        print ("<h3>" . $this->nom .  
        " dans le domaine de " . $this->domaine .  "</h3>");
    }

    public function addEmploye (Personne $p){
        $this->arrayEmployes[] = $p;
    }

    public function afficherEmployes (){
        foreach ($this->arrayEmployes as $employe){
            $employe->sePresenter();         
        }
    }


}