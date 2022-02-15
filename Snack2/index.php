<?php

    $nome = $_GET["nome"];  //Richiesta nome
    $mail = $_GET["mail"];  //Richiesta mail
    $age = $_GET["age"];    //Richiesta eta


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack B</title>
</head>
<body>
    
    <?php
        if(strlen($nome) > 3){                              //controllo lunghezza nome
            echo $nome;
        }
        else
        {
            echo "Nome non valido";
        }
        echo "<br>";

        if(strpos($mail, '@') && strpos($mail, '.')){       //Controllo mail
            echo $mail;
        }
        else
        {
            echo "Mail non valida";
        }
        echo "<br>";

        if(is_numeric($age)){                               //Controllo età
            echo $age;
        }
        else
        {
            echo "Non è un numero";
        }

    ?>

</body>
</html>