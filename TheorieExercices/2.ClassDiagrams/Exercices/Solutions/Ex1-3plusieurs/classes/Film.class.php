<?php


class Film {

    public int $id;
    public string $titre;

    // implementer relation: les diffusions de ce Film, n'importe le Cinema
    public array $filmDiffusions = [];

    public function __construct (int $id, string $titre){
        $this->id = $id;
        $this->titre = $titre;
    }
    public function afficher(){
        echo "<h4>Contenu du Film</h4>";
        echo "<br>id:".$this->id;
        echo "<br>titre:".$this->titre;
    }


}