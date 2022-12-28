<?php

$arr = [
    'cor' => 'Vermelho',
    'forma' => 'Retangular',
    'material'=>'Aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$cor <br>";

$nome = "Daniela";
$pessoa = [
    'nome' => 'Doão',
    'idade' => 28
];

echo "$nome <br>";

extract($pessoa);
echo "$nome <br>";
echo "$idade <br>";

