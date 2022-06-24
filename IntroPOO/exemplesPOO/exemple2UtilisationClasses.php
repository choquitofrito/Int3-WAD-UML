<?php

// dans ce fichier on va utiliser les classes
include "./MorceauC.class.php";

$m1 = new MorceauC("Lololo", 300, 2.5);
var_dump ($m1);

$m2 = new MorceauC("Lalala", 200, 5);
var_dump ($m2);

echo "\nLe titre de m1 est : " . $m1->titre;
echo "\nLe titre de m2 est : " . $m2->titre;

$m1->afficher();
$m2->afficher();

