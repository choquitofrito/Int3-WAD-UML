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



    $local1 = new Local("WADs");
    // Composition
    $local1->setPcs([new PC("Asus"), new PC("DELL")]);

    // effacer le container (local)
    unset($local1);


    // on crée les PCs en dehors
    $local2 = new Local("WADs");
    // ces pcs ont leur propre vie
    $pc1 = new PC("HP");
    $pc2 = new PC("Lenovo");

    $local2->addPC($pc1);
    $local2->addPC($pc2);
    

    var_dump ($local2);
    
    // effacer le container (local) n'effacera pas les PCs
    unset($local2);
    var_dump ($pc1);
    var_dump ($pc2);
    















    ?>
</body>

</html>