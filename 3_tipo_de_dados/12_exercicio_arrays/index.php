<?php

$carro =[
    'Marca' => 'BMW',
    'Rodas' => '4',
    'teto_solar' => true,
    'Velocidade_max' => 300,
    'Blindado' => false
];

print_r ($carro);
$marca = $carro ['Marca'];
$velocidade_maxima = $carro['Velocidade_max'];
echo "<br>";
echo "O carro é da marca $marca e atinge no maximo $velocidade_maxima km/h";
echo '<br>';

