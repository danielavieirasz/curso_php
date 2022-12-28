<?php

$host ="localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host,$user,$pass,$db);

//assunto da aula

$id = 10;

$stmt = $conn->prepare("DELETE FROM itens WHERE id = ?"); 

$stmt->bind_param("s",$id);

$stmt->execute();

$conn->close();