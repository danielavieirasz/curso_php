<?php

$daniela = [
    'nome' => 'Daniela',
    'idade' => 28,
    'profissao'=> 'estudante'
];

$matheus =[
    'nome'=> 'Mathues',
    'idade' => 25,
    'profissao'=> 'programador'
];

foreach($daniela as $carac => $value){

    echo "$carac => $value <br>";

}

foreach($matheus as $carac => $value){

    echo "$carac => $value <br>";
}