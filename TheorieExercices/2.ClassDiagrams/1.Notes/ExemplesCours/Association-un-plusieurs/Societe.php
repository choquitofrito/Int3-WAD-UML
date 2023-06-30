<?php

class Societe {

    // propriétés
    public string $nom;
    public string $domaine;

    // association 1..* avec Personne
    public array $arrayEmployes = [];

    // méthodes
    public function afficher() : void {
        print ("<h3>" . $this->nom .  
        " dans le domaine de " . $this->domaine .  "</h3>");
    }

    public function addEmploye (Personne $p){
        // rélation sens Societe->Personne
        $this->arrayEmployes[] = $p;
        // rélation sens Personne->Societe
        $p->setSociete($this);
    }

    public function afficherEmployes (){
        foreach ($this->arrayEmployes as $employe){
            $employe->sePresenter();         
        }
    }


}