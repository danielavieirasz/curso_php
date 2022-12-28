<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user, $pass);

// EM CIMA OS PARAMETROS  EM BAIXO  ASSUNTO DA AULA.

$stmt = $conn->prepare("INSERT INTO itens(nome, descricao) Values(:nome, :descricao)");

$nome = "Suporte monitor";
$descricao = "O suporte esta novo e esta na caixa.";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();