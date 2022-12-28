<?php

$frase = "Testando o resto da string, para ver se da certo";

$resto = strstr($frase,"resto");
echo "$resto <br>";

$s = "string";

$resto2 = strstr($frase,$s);
echo "$resto2 <br>";

if(strstr($frase, ".NET")=== false){
    echo "Não encontramos a string! <br>";
}