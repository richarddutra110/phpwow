

<?php 
    
    $numero = $_POST['numero'];

    if ($numero == 1){
                echo "<h1>DOMINGO</h1>";
        } 
            
    elseif ($numero == 2) {
                echo "<h1>SEGUNDA</h1>";
        } 
            
   elseif ($numero == 3) {
                echo "<h1>TERÇA</h1>";
          } 
            
    elseif ($numero == 4) {
                echo "<h1>QUARTA</h1>";
        } 

    elseif ($numero == 5) {
                echo "<h1>QUINTA</h1>";
        } 

    elseif ($numero == 6) {
                echo "<h1>SEXTA</h1>";
         } 


    elseif ($numero == 7) {
            echo "<h1>SÁBADO</h1>";
        } 
            

    elseif ($numero <> 1 || 2 || 3 || 4 || 5) {
                echo "<h1>eu disse um número de 1 a 7...</h1>";
        }
?>