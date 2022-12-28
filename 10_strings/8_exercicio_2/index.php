<?php

$nome = "Daniela Vieira De Souza";

$contadordeIs = 0;

for($i = 0; $i < strlen($nome);$i++){
    if($nome[$i]=== "i"){
        $contadordeIs++;
    }
}

echo "O número de I's no nome de Daniela é de : $contadordeIs";

echo "<br>";



$frase = "O rato roeu a roupa do rei de roma";
$contadordeAs = 0;
for($i = 0;  $i < strlen($frase);$i++){
    

    if($frase[$i] === "a"){
        $contadordeAs++;
    }
  
}
echo "o numero de A é na frase é de: $contadordeAs";