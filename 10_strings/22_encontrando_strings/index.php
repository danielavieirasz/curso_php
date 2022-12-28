<?php

$str = "Estamos testando o metodo strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str,"strpos");

echo "$testeEncontrar <br>";

$testeEncontrar2 = strpos($str,"java");

echo "$testeEncontrar2 <br>";

if($testeEncontrar2 === false){
    echo "Palavra não encontrada <br>";

}

$palavra = "com";
$testandoEncontrar3 = strpos($str,$palavra);
echo "$testandoEncontrar3 <br>";

$palavra = "to";
$testandoEncontrar4 = strpos($str,$palavra);
echo "$testandoEncontrar4 <br>";

