<style>
    h1{
        
        color:red;
    
    
    }

    body{


        background-color: rgb(189, 252, 181);
        }
    
    
</style>


<?php 


$nome = $_POST['nome'];
$ano = $_POST['ano'];

$idade = 2022 - $ano;

echo "<h1 text-color: red>Olá! {$nome}, pelos meus calculos você tem {$idade} anos de idade.</h1>";


?>