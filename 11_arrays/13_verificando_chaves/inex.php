<?php

$arr =[
    'nome' => "Daniela",
    'idade' => 28
];

if(array_key_exists('nome',$arr)){
    echo "A chave existe ! <br>";

} else {
    echo "A chave não existe! <br>";

}

if(array_key_exists("profissao", $arr)){
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe! <br>";
}

if(array_key_exists("idade", $arr)){
    echo "A chave existe <br>";
}else{
    echo "a chave não existe! <br>";
}

if(isset($arr['nome'])){
    echo "A chave existe ISSET<br>";

}else{
    echo "A chave não existe <br>";
}

if(isset($arr['teste'])){
    echo "A chave existe ISSET<br>";

}else{
    echo "A chave não existe isset <br>";
}