<?php
// classes loader
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

// new pokemons
    $pikachu = new Pikachu("Stroomkonijn");
    $charmander = new Charmander("Vuurpaard");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <title>Pokemon!</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="images/pokeball.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Pokemon Battle
        </a>
    </nav>
    <main>
    <!-- pokemon battle lines -->
        <div class="card w-75 attackLine">
            <div class="card-body ">
                <h5 class="card-title">Log</h5>
                <p class="card-text"><?php echo $pikachu->getHealth()?></p>
                <?php  $charmander->attackPokemon($pikachu, $charmander->getAttack("Head Butt")) ?>
                <p class="card-text"><?php echo $pikachu->getName() . " has been attacked"?></p>
                <p class="card-text"><?php echo $pikachu->getHealth()?></p>

                <p class="card-text"><?php echo $charmander->getHealth()?></p>
                <?php  $pikachu->attackPokemon($charmander, $pikachu->getAttack("Pika Punch")) ?>
                <p class="card-text"><?php echo $charmander->getName() . " has been attacked"?></p>
                <p class="card-text"><?php echo $charmander->getHealth()?></p>
            </div>
        </div>
        <div class="pikachuImg"><img src="images/pickachu.png" alt="pikachu"></div>
        <div class="charmanderImg"><img src="images/charmander-hd.jpg" alt="pikachu"></div>
    </main>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>