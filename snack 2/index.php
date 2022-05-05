<?php
/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che
non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail
contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare
“Accesso riuscito”, altrimenti “Accesso negato” */

function validation(){
    $name = (isset($_GET['name']) ? $_GET['name'] : '');
    $mail = (isset($_GET['mail']) ? $_GET['mail'] : '');
    $age = (isset($_GET['age']) ? $_GET['age'] : '');

    if(strlen($name) > 3 && strpos($mail, '@') != false && strpos($mail, '.') != false && is_numeric($age)){
        return "Accesso riuscito";
    }
    else{
        return "Accesso negato";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>

<body>
    <div id="root">
        <form method="get">
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="text" name="age" placeholder="Età">
            <input type="submit" value="Invia">
            <h2><?php echo validation() ?></h2>
        </form>
    </div>
</body>

</html>