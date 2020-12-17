<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./Personne.class.php";
    include "./Societe.class.php";

    $s = new Societe ("Lola CO","Rue de la Paix");
    $p = new Personne ("Jeanne","Rue Haute");
    $s->addEmploye($p);

    var_dump ($s);


    ?>
</body>
</html>