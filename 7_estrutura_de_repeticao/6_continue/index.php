<?php

$a = 10;

while($a > 0){
    
    echo "executando o loop $a <br>";

    if($a == 5 || $a == 7 ){
        
        echo "Pulou a excução $a <br>";
    $a--; 
    continue;

    }

    if($a == 2){
        echo "Terminando o loop break $a <br>";

        break;
    }

    echo "executando o loop $a <br>";

    $a--;
}