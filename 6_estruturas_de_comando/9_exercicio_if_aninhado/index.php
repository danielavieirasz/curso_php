<?php

$a = 12;
$b = 89;
$c = "teste";

if(is_int($a)|| is_float($a)) {

    $multi = $a *2;

    if($multi > 100) {

        echo "O numero é maior que 100 <br> ";

    } else {
        echo "o numero não é maior que 100 <br>";
    }

} else {

    echo "não é um numero <br>";

}

if(is_int($b)|| is_float($b)) {

    $multi1 = $b *2;

    if($multi1 > 100) {

        echo "O numero é maior que 100 <br> ";

    } else {
        echo "o numero não é maior que 100 <br>";
    }

} else {

    echo "não é um numero <br>";

}

if(is_int($c)|| is_float($c)) {

    $multi1 = $c *2;

    if($multi1 > 100) {

        echo "O numero é maior que 100 <br> ";

    } else {
        echo "o numero não é maior que 100 <br>";
    }

} else {

    echo "não é um numero <br>";

}