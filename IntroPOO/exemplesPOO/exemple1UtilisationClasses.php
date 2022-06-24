<?php

// dans ce fichier on va utiliser les classes
include "./Morceau.class.php";

$morceau1 = new Morceau();
$morceau2 = new Morceau();

$morceau1->titre = "Lalala"; // en C# on utilise le . , c.a.d. : morceau1.titre = "Lalala"
$morceau1->duree = 500;
$morceau1->prix = 2;

$morceau2->titre = "Lilili"; 
$morceau2->duree = 400;
$morceau2->prix = 3;



var_dump ($morceau1);
var_dump ($morceau2);


