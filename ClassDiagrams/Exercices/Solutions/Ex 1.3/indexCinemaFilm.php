<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "./Cinema.class.php";
    include_once "./Film.class.php";
    include_once "./Salle.class.php";
    include_once "./Projection.class.php";
    
    $f1 = new Film ("Up");
    $f2 = new Film ("Sully");
    $f3 = new Film ("Les Indestructibles");

    $c1 = new Cinema ("Cine WAD");

    $s1 = new Salle ("A1");
    $s2 = new Salle ("A2");
    $s3 = new Salle ("A3");

    $c1->setListeSalles([$s1,$s2,$s3]);
    
    $p1 = new Projection ("4/10/2020", $c1, $f1, $s1);

    var_dump ($c1);
    
    var_dump ($p1);

    

    ?>
</body>
</html>