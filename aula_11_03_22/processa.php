<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>


    <style>
    p{
        
        color:red;
    
    
    }
    
    
    </style>
</head>
<body>

<?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];

    $soma = $num1 + $num2;
    

    echo "<p>A soma é: $soma </p>";
    //echo "A soma é: ".$soma;


?>

</body>
</html>








