<?php


class Utilisateur {
    public int $id;
    public string $nom;
    // implementer la relation
    public array $comptesMail = [];
    
    public function __construct (int $id, string $nom){
        $this->id = $id;
        $this->nom = $nom;
    }

    public function addCompteMail (CompteMail $compte){
        // rajouter à l'array
        $this->comptesMail[] = $compte;
        // fixer l'autre côté de la relation
        $compte->setUtilisateur ($this);

    }
}