<?php

class Cinema {
    public int $id;
    public string $nom;
    public string $ville;

    // implementer la relation : les diffusions qui ont lieu dans ce Cinema
    public array $cinemaDiffusions = [];

    public function __construct (int $id, string $nom, string $ville){
        $this->id = $id;
        $this->nom = $nom;
        $this->ville = $ville;
    }
    // rajouter une Diffusion au Cinema. On aura la même chose pour Film
    public function addDiffusion (Diffusion $diffusion){
        $this->cinemaDiffusions[] = $diffusion;
    }
    public function afficher(){
        echo "<h4>Contenu du Cinema</h4>";
        echo "<br>id:".$this->id;
        echo "<br>nom:".$this->nom;
        echo "<br>ville:".$this->ville;
    }
    public function afficherDiffusions (){
        echo "<h3>Contenu des diffusions du Cinema</h3>";
        foreach ($this->cinemaDiffusions as $uneDiffusion){
            $uneDiffusion->afficher();
        }
    }
}