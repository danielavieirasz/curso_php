<?php

print_r($_SERVER);
echo '<br>';

echo '<br>';

echo $_SERVER['HTTP_REFERER']. "<br>";
echo '<br>';


if($_SERVER['SERVER_NAME'] == 'localhost'){

    echo "Esta acessando localhost <br>";
}