<?php

$arr = [1,2,3,15,100,14,45,35,1000];

function soma($a, $b){
    return $a + $b;

}
$resultado = array_reduce($arr,"soma");
echo "$resultado <br>";

function subtracao($a, $b){
    return $a - $b;

}
$resultado2 = array_reduce($arr,"subtracao");
echo "$resultado2 <br>";