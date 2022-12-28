<?php

$a = 10;
$b = 15;

function testeEscopo(){

    $a = 5;
    
    global $b;

    static $c = 0;

    $a++;
    $b++;
    $c++;

    echo "ESCOPO LOCAL DE A: $a . <br>";
    echo "<br>";
    echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";
    echo "<br>";
    echo "ESCOPO STATIC DE C: $c . <br>";
    echo "<br>";
}   

echo "Escopo Global de A: $a . <br>";
echo "<br>";
testeEscopo();
echo "<br>";
echo "ESCOPO GLOBAL NA FUNÇÃO DE B 2: $b <br>";
echo "<br>";
testeEscopo();