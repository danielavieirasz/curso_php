<?php

$carro = ["jaguar","3.0","Azul","18","teto salar","automatico"];

print_r($carro);
echo "<br>";

list($modelo, $motor,$cor,$aro,$opcional,$cambio) = $carro;

echo "$modelo <br>";
echo "$motor <br>";
echo "$cor <br>";
echo "$aro <br>";
echo "$$opcional<br>";
echo "$cambio<br>";