<?php

$arr =[
    'Matheus'=> 29,
    'Pedro'=> 18,
    'joaquim'=>14,
    'Maria' => 12
];

asort($arr);

print_r($arr);
echo "<br>";

$arr2 =[
    'Matheus'=> 12,
    'Pedro'=> 44,
    'joaquim'=>14,
    'Maria' => 32
];

arsort($arr2);

print_r($arr2);
echo "<br>";


$arr3 =[
    'Matheus'=> 12,
    'Pedro'=> 44,
    'joaquim'=>14,
    'Maria' => 32
];

ksort($arr3);

print_r($arr3);
echo "<br>";


$arr4 =[
    'Matheus'=> 12,
    'Pedro'=> 44,
    'joaquim'=>14,
    'Maria' => 32
];

krsort($arr4);

print_r($arr4);
echo "<br>";