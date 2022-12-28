<?php

    $pessoa = [
        'nome' => 'Daniela',
        'idade' =>'28',
        'profissao' =>'Programadora',
        'graduacao' => 'Analise e Desenvolvimentos de sistemas'
    ];
    print_r ($pessoa); 
    echo '<br>';
    $maioridade = 18;
    // desafio
    if($pessoa['idade']>= $maioridade){
        echo "A pessoa é maior de idade!";
    }
