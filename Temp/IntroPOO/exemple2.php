<?php


$morceau = [
    'titre' => 'And justice for all',
    'duree' => 300,
    'prix' => 2
];


$morceau2 = [
    'titre' => 'For whom the bells ...',
    'duree' => 350,
    'prix' => 2.5
];

$groupe = [
    'nom' => 'Frank Zappa',
    'nationalite' => 'USA'
];

$groupe2 = [
    'nom' => 'Metallica',
    'nationalite' => 'USA'
];

// inclure la fonctionnalité des morceaux
include "./fonctionsMorceau.php";
include "./fonctionsGroupe.php";

// utilisation des fonctions
foreach ($morceau as $cle => $val) {
    echo "\n" . $cle . ":" . $val;
}

echo "\nLe prix TVAC est: " . prixTVA($morceau);


titreMajuscules($morceau);
echo "\nTitre majs: " . $morceau['titre'];

afficher ($morceau);
afficher ($morceau2);
afficher ($groupe);