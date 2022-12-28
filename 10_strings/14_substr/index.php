<?php

$str = "Esta é a minha string";

$minha = substr($str,10,5); // string pai, indice incial, comprimento

echo $str . "<br>";
echo $minha . "<br>";

$str2 = "Testando esta string abc";

$novaString = substr($str2, 8); // omitir comprimento = pegar ate o fim

echo $novaString . "<br>";

$novaString . "<br>";

$novaString2 = substr($str2, 8, -3); // comprimento negativo = remover do ultimo indece

echo $novaString2 . "<br>";
