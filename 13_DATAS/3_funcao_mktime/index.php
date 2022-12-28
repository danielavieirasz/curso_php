<?php

$dataNascimento = mktime(9,30,12,01,07,1994);
echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
echo $dataNascimentoFormatada . "<br>";