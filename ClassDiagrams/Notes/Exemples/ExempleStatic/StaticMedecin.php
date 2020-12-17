<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


class Medecin {
    private $nom;
    private $specialite;

    public static $codeDeontologique;

    public function __construct($nom){
        $this->nom = $nom;
    }
    public function renvoyerNom (){
        return $this->nom;
    }

    public static function setCodeDeontologique ($nouveauCode){
        self::$codeDeontologique = $nouveauCode;
    }
}


$m1 = new Medecin("Belén");
echo $m1->renvoyerNom();
echo "<br>";
$m2 = new Medecin("Zuli");
echo $m2->renvoyerNom();
echo "<br>";

// $m1->codeDeontologique = "Prendre soin des malades. Pas empoisoner les malades"; // NON, c'est static
// echo $m1->codeDeontologique;

Medecin::$codeDeontologique =  "Respecter les patients";
echo Medecin::$codeDeontologique;
Medecin::setCodeDeontologique("Manger du fromage");

?>
</body>
</html>

