<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./Local.class.php";
    include "./PC.class.php";


    // ces pcs ont leur propre vie
    $pc1 = new PC("Asus");
    $pc2 = new PC("Dell");

    $local1 = new Local("WADs");

    // var_dump($local1); // 1. le local est vide
    // die();


    // on rajoute les pcs au local
    $local1->addPC($pc1);
    $local1->addPC($pc2);

    // var_dump($local1); // 2. le local contient les pcs mais le pcs ne sont pas affectés d'un local
    // die();



    // mais on doit aussi créer le lien dans l'autre sens! (indiquer le local pour chaque PC)
    $pc1->setLocal($local1);
    $pc2->setLocal($local1);

    // var_dump($local1); // 3. tous les liens sont faits
    // die();


    // effacer le container (local)
    unset($local1);

    // est-ce que le pcs vivent encore??
    $pc1->showPC();
    $pc2->showPC();
    
    








    ?>
</body>

</html>