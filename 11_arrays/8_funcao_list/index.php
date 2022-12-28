<?php

$pessoa = ["Daniela",28,"castanhos"];


print_r($pessoa);
echo "<br>";

list($nome,$idade,$corDosOlhos)= $pessoa;
echo "$nome <br>";
echo "$idade <br>";
echo "$corDosOlhos <br>";