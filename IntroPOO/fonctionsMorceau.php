<?php
// création des fonctions

function prixTVA(array $morceau): float
{
    $prixTVA = $morceau['prix'] * 1.21;
    return $prixTVA;
}

function titreMajuscules(array &$morceau): void
{
    $morceau['titre'] = strtoupper($morceau['titre']);
}

function afficher(array $morceau)
{
    echo "\n\n\nLes données du morceau sont: ";
    foreach ($morceau as $cle => $val) {
        echo "\n" . $cle . ":" . $val;
    }
}

