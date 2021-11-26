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
    // include et config BD
    include_once "./config/db.php";
    try {
        $bdd = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT .
            ';dbname=' . DBNAME . ';charset='
            . DBCHARSET, DBUSER, DBPASS);
    } catch (Exception $e) {
        // en mode dev, on veut connaitre toutes les infos
        echo $e->getMessage();
        die();
    }


    // include autoload (classes)
    include "./vendor/autoload.php";
    

    
    // Dans ce script:
    // 1. Créer un Type de Character et le stocker dans la BD
    // 2. Créer un Player et le stocker dans la BD
    // 3. Créer deux Character et le stocker dans la BD



    // créons un Type, puis on commente les lignes pour ne pas créer de doublons dans la BD
    $type1 = new TypeManager ($bdd);

    $type1 = new Type ([
        'name'=> 'witch',
        'minPV'=>15,
        'minPV'=>15,
        'minPA'=>5,
        'maxPA'=>10,
    ]);

    $type2 = new Type ([
        'name'=> 'elf',
        'minPV'=>10,
        'minPV'=>20,
        'minPA'=>8,
        'maxPA'=>15,
    ]);

    $p1Manager = new PlayerManager($bdd);
    $p1 = new Player([
        'name' => 'player1',
        'email' => 'p1@fastmail.com'
    ]);
    $p1Manager->insert($p1);


    $chManager = new CharacterManager($bdd);
    $c1 = new Character([
        'name' => 'Witch Stefania',
        'type' => $type1 // ici on injecte le type
        // PV et PA sont générés dans le constructeur en utilisant le random du Type!
    ]);
    $c2 = new Character([
        'name' => 'Witch Laure',
        'type' => $type1 // ici on injecte le type
        // PV et PA sont générés dans le constructeur en utilisant le random du Type!
    ]);
    $c3 = new Character([
        'name' => 'Witch Ylenia',
        'type' => $type1 // ici on injecte le type
        // PV et PA sont générés dans le constructeur en utilisant le random du Type!
    ]);

    $chManager->insert ($c1);




    
    var_dump($p1);


    ?>
</body>

</html>