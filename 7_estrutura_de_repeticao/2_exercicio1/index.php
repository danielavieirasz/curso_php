<?php

$arr = [5, "Daniela", true,  false, "Opa", 12.8, "teste", true, [], "Palavra", 5,10, "Alô"];
$x = count($arr);
$y = 0;
while($y < $x){
    if(is_string($arr[$y])) {
        echo $arr[$y] . '<br>';
    }
    $y++;
}