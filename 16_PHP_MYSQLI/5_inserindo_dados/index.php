<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn =  new mysqli($host, $user, $pass, $db);

// assunto da aula

$table = "itens";
$nome = "Xicara";
$descricao = "é uma xícara usada cor de rosa";

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);
$conn->close();