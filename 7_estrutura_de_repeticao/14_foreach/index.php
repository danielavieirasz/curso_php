<?php

$nomes = ["Daniela", "Nair", "Daiane", "Diango"];
$a = 10;

foreach($nomes as $nome){
    echo "O nome do índice atual é $nome <br>";
    if($nome == "Daniela"){
        echo "Olá $a <br>";
    }
}