<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemple association Employes-Societe</h1>
    <?php
    include_once "./Personne.class.php";
    include_once "./Societe.class.php";

    $p = new Personne("Lola");
    $s = new Societe ("Lola & CO");
    echo "<br>Nom de la societé: ".$s->getNom();
    echo "<br>Nom de l'employé: ".$p->getNom();

    $p->setEmployeur($s);
    var_dump ($p);


    echo "<br>Voici la liste d'employés: ";
    $s->addEmploye($p);
    $s->addEmploye(new Personne("Zuli"));
    $s->addEmploye(new Personne("Kelly"));
    $s->addEmploye(new Personne("Alessia"));
    $s->showEmployes();
    
    ?>
</body>
</html>