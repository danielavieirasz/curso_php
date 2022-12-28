<?php

$marca = ' Palio';
$motor = 1.4;
$cor = 'Vermelho';
$vendido = true;

$carro = compact('marca','motor','cor','vendido');

print_r($carro);
echo "<br>";

foreach($carro as $caracteristicas => $value){
    echo "$caracteristicas: $value <br>";
}

