<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./Classes/Personne.php";

    $p1 = new Personne();
    
    $p1->nom = "Lola";
    $p1->hobby = "Surfer";

    $p2 = new Personne();
    
    $p2->nom = "Lili";
    $p2->hobby = "Regarder de films";

    $p1->sePresenter();
    $p2->sePresenter();

    
    var_dump ($p1);



    ?>
</body>
</html>