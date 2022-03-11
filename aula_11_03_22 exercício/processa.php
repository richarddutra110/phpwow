<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>


    <style>


    body{


        background-color: rgb(250, 85, 195);
    }
    
    
    </style>
</head>
<body>

<?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $num3 = $_REQUEST['num3'];

    $soma = $num1 + $num2 + $num3;
    
    $media = $soma / 3;

    echo "<p>A média é: $media </p>";
    //echo "A soma é: ".$soma;


?>

</body>
</html>








