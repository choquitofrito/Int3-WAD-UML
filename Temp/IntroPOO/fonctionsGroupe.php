<?php

function afficher(array $groupe)
{
    echo "\n\n\nLes données du morceau sont: ";
    foreach ($groupe as $cle => $val) {
        echo "\n" . $cle . ":" . $val;
    }
}
