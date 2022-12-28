<?php

$arr = [
    'colchão' =>100,
    'pezinhos' => 40,
    'fronha'=>5,
    'base'=> 250
    
];

function itensCama($arr){
    $arrItensCama =[];
    
    foreach($arr as $item => $preco) {
        if($preco > 10){

             array_push($arrItensCama, $item);
        }
    }

    return $arrItensCama;

}

$novoArr = itensCama($arr);

print_r($novoArr);

