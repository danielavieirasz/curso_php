<?php

$velocidade = 60;
$velocidadeMaxima = 40;

if($velocidade < $velocidadeMaxima){

    echo "Parabéns!! Você  dentro do limite de velocidade <br>";

} else if($velocidade == $velocidadeMaxima){

    echo "Cuidado, vc esta no limite de velocidade  <br>";
} else {

    echo "Você foi multado <br>";
}
