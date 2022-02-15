<?php

$squadre = [

    [
        'sCasa' => 'casa1',
        'sOspite' => 'ospite1',
        'pCasa' => '10',
        'pOspite' => '11',
    ],
    [
        'sCasa1' => 'casa2',
        'sOspite1' => 'ospite2',
        'pCasa1' => '12',
        'pOspite1' => '13',
    ],
    [
        'sCasa2' => 'casa3',
        'sOspite2' => 'ospite3',
        'pCasa2' => '14',
        'pOspite1' => '15',
    ],
    [
        'sCasa3' => 'casa4',
        'sOspite3' => 'ospite4',
        'pCasa3' => '16',
        'pOspite3' => '17',
    ]

];

$i=0;

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
    <pre>
        <?php
            for($i = 1; $i <= count($squadre); $i++)
                print_r($squadre[$i]);
        ?>
    </pre>
</body>
</html>