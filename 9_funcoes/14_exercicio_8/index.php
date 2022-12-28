<?php

function defineCorCarro($cor = "vermelha"){

    return "A cor do carro é : $cor <br>";


}

$carroVermelho = defineCorCarro();
echo $carroVermelho . "<br>";

$carroAzul = defineCorCarro("Azul");
echo $carroAzul . "<br>";