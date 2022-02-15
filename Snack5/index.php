<?php

$Alunni = [

    [
        'Nome' => 'Luca',
        'Cognome' => 'Valle',
        $Voti = [3, 5, 6, 3, 4, 6, 2, 7, 8, 9],
        $Media = [],
    ],
    [
        'Nome' => 'Pietro',
        'Cognome' => 'Basso',
        $Voti = [1, 2, 3, 4, 5, 6, 2, 7, 8, 9],
        $Media = [],
    ],
    [
        'Nome' => 'Silvia',
        'Cognome' => 'Random',
        $Voti = [1, 2, 3, 4, 5, 6, 2, 7, 4, 5],
        $Media = [],
    ], 
    [
        'Nome' => 'Arturo',
        'Cognome' => 'Rossi',
        $Voti = [5, 6, 7, 8, 10, 5, 2, 7, 4, 5],
        $Media = [],
    ]

];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack E</title>
</head>
<body>
    
    <?php
        for($i = 0; $i < count($Alunni); $i++){  //ciclo 
            for($i = 0; $i < count($Voti); $i++){  //ciclo 
                    $somma += $Voti[$i];
                    $risultato = $somma / 10;
                    if(!count($somma) <= 9){
                        $Media[] = $risultato;
                        var_dump($risultato);
                    }
                    
            };
        };
        for($i = 0; $i < count($Alunni); $i++){  //ciclo 

            echo $Alunni[$i]["Nome"];           
            echo " ";
            echo $Alunni[$i]["Cognome"];         
            echo " | ";  
            echo $Alunni[$i][$Media];         
            echo "<br>";

        }
    ?>

</body>
</html>