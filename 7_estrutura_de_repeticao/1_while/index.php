<?php


// A definição do contador 
$x = 0;
// inicio / definição da estrutura
while($x < 10) {
//corpo do loop
    echo $x . "<br>";
/// incremento do contador
    $x = $x + 1;
}

echo " Continua com o codigo <br>";
echo '<br>';

$y = 0;

while($y <= 10){

    echo $y . "<br>";

    $y = $y + 2;
}
echo " Continua com o codigo <br>";
echo '<br>';

$z=10;
while($z >0 ){

    echo $z. "<br>";
    $z--;
}

echo " Continua com o codigo <br>";
echo '<br>';

$a = 10;
while($a > 0){
    if($a % 2 != 0){
        echo $a . "<br>";
    }
    $a--;
}