<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./classes/Utilisateur.class.php";
    include_once "./classes/CompteMail.class.php";

    $user1 = new Utilisateur(1, "Julie");
    // si on voulait une aggregation on devrait créer une variable externe pour le compte
    $user1->addCompteMail(new CompteMail(1,"julie@gmoil.com",30000));
    $user1->addCompteMail(new CompteMail(2,"july@gmoil.com",50000));
    $user1->addCompteMail(new CompteMail(3,"jules@gmoil.com",40000));


    var_dump ($user1);
    
    

    ?>

</body>

</html>