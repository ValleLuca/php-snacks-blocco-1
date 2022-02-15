<?php

    $testo = "Lorem ipsum dolor sit. amet consectetur adipisicing elit. Doloremque iste architecto expedita dicta maiores necessitatibus atque excepturi mollitia quae delectus placeat quo reiciendis. dolore doloribus blanditiis repudiandae possimus iure nemo minima. Accusamus odio deleniti explicabo. Est culpa reprehenderit corporis hic";
    $testo2 = str_ireplace(".", "<br>", $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack D</title>
</head>
<body>
    
    <?php  echo $testo2 ?>

</body>
</html>