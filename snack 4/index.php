<?php
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà
contenere lo stesso numero più di una volta */

function randomNumbers(){
    $array = [];
    while(count($array) < 15){
        $rand = rand(1, 100);
        if(!in_array($rand, $array)){
            $array[] = $rand;
        }
    }
    foreach ($array as $num) {
        echo '<h2>'.$num.'</h2>';
    };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 4</title>
</head>

<body>
    <style>
        .numbers{
            display: flex;
        }
        h2{
            display: inline-block;
            text-align: center;
            width: calc(100% / 15);
        }
    </style>
    <div id="root">
        <h1>Numeri casuali:</h1>
        <div class="numbers">
            <?php randomNumbers() ?>
        </div>
    </div>
</body>

</html>