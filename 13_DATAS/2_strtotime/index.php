<?php

$cincodias = strtotime("5 days");

echo $cincodias . "<br>";

$dezdias = strtotime("10 days");

echo $dezdias . "<br>";

$dataAtualMais5 =date('d/m/y', $cincodias);

echo $dataAtualMais5 . "<br>";

$dataAtualMais10 =date('d/m/y', $dezdias);

echo $dataAtualMais10 . "<br>";

$doismeses = strtotime('2 months');
echo $doismeses . "<br>";

$dataAtaualMaisDoisMeses = date('d/m/y',$doismeses);
echo $dataAtaualMaisDoisMeses . "<br>";

$dozeanos =strtotime("12 years");
echo date ('d/m/y', $dozeanos) . "<br>";

