<?php

$usuario = [

    'nome'=> 'Daniela',
    'idade'=> 28,
    'profissao'=>'Programadora'
];

if($usuario){
    $nome = $usuario['nome'];
    $idade=$usuario['idade'];
    $profissao=$usuario['profissao'];
}

?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dvevice-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="profissao" placeholder="Digite sua profissao" value="<?= $profissao ?>">
        </div>
</body>
</html>
