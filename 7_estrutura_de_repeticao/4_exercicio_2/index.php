<?php

$x = 4; 
$limite = 30;
while ($x < $limite){
echo "Executando o loop $x <br>";
$x +=2;

if($x === 24){
   echo "terminando loop <br>";
   break;
}


}