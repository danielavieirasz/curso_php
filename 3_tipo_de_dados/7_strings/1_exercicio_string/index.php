<?php
echo "Testando strings com aspas duplas <br>";
echo 'Testando strings copm aspas simples <br>';

echo 'A corretora de imoveis disse: "Você precisa coprovar renda"<br>';

$entrada = 40.000;

echo "Eu disse a ela que tenho $entrada  de ' 30.000' reais <br>";

echo '<br>';

$str = "Daniela";
$num = 28;
echo $str;
echo '<br>';
echo $num;
echo '<br>'; 
if(is_string($str)){
    echo '<br>';
    echo  "A $str é uma string <br>";
}
echo "<br>";

if(is_string($num)){
    echo "<br>";
    echo "O $num é uma string <br>"; 
}
