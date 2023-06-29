<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./Societe.php";
    include "./Personne.php";

    $s1 = new Societe();
    $s1->nom = "Najoua SA";
    $s1->domaine = "Programming";

    $p1 = new Personne();
    $p1->nom = "Hsin I";
    $p1->hobby = "langues";

    $p2 = new Personne();
    $p2->nom = "Hanane";
    $p2->hobby = "musique";

    // on rajout des employés (Personne)
    $s1->addEmploye ($p1);
    $s1->addEmploye ($p2);

    $s1->afficherEmployes();


    // var_dump ($s1);
    // var_dump ($p1);



    
    
    
    ?>
</body>
</html>