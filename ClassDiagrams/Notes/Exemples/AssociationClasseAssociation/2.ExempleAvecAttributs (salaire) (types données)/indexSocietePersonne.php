<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./Personne.class.php";
    include_once "./Societe.class.php";
    include_once "./Contrat.class.php";

    $p1 = new Personne("Sophie","Rue Van AA");
    $p2 = new Personne("Manon", "Rue de la Poire");

    $s1 = new Societe("PostWad CO", "Rue B");

    $c1 = new Contrat(3000, "01/03/2020", $p1, $s1);
    // Si on ne fait pas l'injection de dépendances, on doit affecter avec les set
    // $c1->setEmploye($p1);
    // $c1->setEmployeur($s1);
    $c2 = new Contrat(2500, "01/10/2020", $p2, $s1);

    var_dump ($p1);
    var_dump ($p2);
    var_dump ($s1);
    var_dump ($c1);
    var_dump ($c2);
    
    








    ?>
</body>

</html>