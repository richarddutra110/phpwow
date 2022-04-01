<?php

$num1 = $_GET['num01'];
$num2 = $_GET['num02'];
$num3 = $_GET['num03'];

echo "Você digitou os números nessa ordem: $num1, $num2 e $num3"."<br>";

if ($num1 < $num2 and $num1 < $num3){
    if ($num2 < $num3){
        echo "A ordem crescente dos números é: $num1 < $num2 < $num3";
    }
    else{
        echo "A ordem crescente dos números é: $num1 < $num3 < $num2";
    }
}

if ($num1 > $num2 and $num1 > $num3){
    if ($num2 > $num3){
        echo "A ordem crescente dos números é: $num2 < $num3 < $num1";
    }
    else{
        echo "A ordem crescente dos números é: $num3 < $num2 < $num1";
    }
}



if ($num3 < $num1 and $num3 < $num2){
    if ($num1 < $num2){
        echo "A ordem crescente dos números é: $num3 < $num1 < $num2";
    }
    else{
        echo "A ordem crescente dos números é: $num3 < $num2 < $num1";
    }
}
?>