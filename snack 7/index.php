<?php
/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà
Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e
la media dei voti di ogni alunno. */

$students = [
    [
        'name' => 'Carlo',
        'surname' => 'Martello',
        'grades' => [9, 8, 9, 10]
    ],
    [
        'name' => 'Federico',
        'surname' => 'Fellini',
        'grades' => [4, 3.5, 6, 6]
    ],
    [
        'name' => 'Ciccio',
        'surname' => 'Pasticcio',
        'grades' => [7, 7.5, 7, 6]
    ],
    [
        'name' => 'Luca',
        'surname' => 'Carboni',
        'grades' => [2, 2, 3, 4]
    ],
    [
        'name' => 'Tullio',
        'surname' => 'Ostilio',
        'grades' => [10, 10, 7, 10]
    ]
];

function studentsList($students){
    foreach($students as $student){
        $avg = array_sum($student['grades'])/count($student['grades']);
        echo '<h2>'.$student['name'].' '.$student['surname'].'</h2>'.'<p>'.'Media dei voti: '.$avg.'</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 7</title>
</head>

<body>
    <div id="root">
        <?php studentsList($students) ?>
    </div>
</body>

</html>