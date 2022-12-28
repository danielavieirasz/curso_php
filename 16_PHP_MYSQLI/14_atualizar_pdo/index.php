<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user, $pass);

// EM CIMA OS PARAMETROS  EM BAIXO  ASSUNTO DA AULA.

$id = 9;
$nome = "Agenda";
$descricao = "Agenda rosa, capa dura, com 300 folhas";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();