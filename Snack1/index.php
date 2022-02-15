<?php

$squadre = [

    [
        'sCasa' => 'casa1',
        'sOspite' => 'ospite1',
        'pCasa' => '10',
        'pOspite' => '11',
    ],
    [
        'sCasa' => 'casa2',
        'sOspite' => 'ospite2',
        'pCasa' => '12',
        'pOspite' => '13',
    ],
    [
        'sCasa' => 'casa3',
        'sOspite' => 'ospite3',
        'pCasa' => '14',
        'pOspite' => '15',
    ],
    [
        'sCasa' => 'casa4',
        'sOspite' => 'ospite4',
        'pCasa' => '16',
        'pOspite' => '17',
    ]

];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack A</title>
</head>
<body>
    <?php
        for($i = 0; $i < count($squadre); $i++){  //ciclo 

            echo $squadre[$i]["sCasa"];           //squadra casa
            echo " - ";
            echo $squadre[$i]["sOspite"];         //squadra ospite
            echo " | ";
            echo $squadre[$i]["pCasa"];           //punti squadra casa
            echo "-";
            echo $squadre[$i]["pOspite"];         //punti squadra opsite
            echo "<br>";

        }
    ?>
</body>
</html>