<?php

$arr1 = [1,2,3];
$arr2 = [2,4,6];

$diff = array_diff($arr1,$arr2);
print_r($diff);
echo "<br>";

$arr3 = [4];

$diff2 = array_diff($arr2,$arr1,$arr3);

print_r($diff2);
echo "<br>";