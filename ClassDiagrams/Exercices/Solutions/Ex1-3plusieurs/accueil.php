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

    include "./classes/Cinema.class.php";
    include "./classes/Film.class.php";
    include "./classes/Diffusion.class.php";

    $monCinema = new Cinema(3, "Styx", "Bruxelles");

    $f1 = new Film(4, "Alien");
    $f2 = new Film(5, "Robocop");

    // on ne peut plus faire ceci!! on doit passer par Diffusion!
    // $monCinema->addFilm ($f1);
    // $monCinema->addFilm ($f2);

    $monCinema->addDiffusion(
        new Diffusion(
            10,
            new DateTime("2001-10-2"),
            $monCinema,
            $f1
        )
    );
    // var_dump($monCinema);

    var_dump($monCinema->cinemaDiffusions[0]);







    ?>
</body>

</html>