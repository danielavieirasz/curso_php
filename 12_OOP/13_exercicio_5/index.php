<?php


class Humano {

    public $maos = 2;
    public $pernas = 2 ;

    public function falar(){
        echo "Olá, eu sou humano <br>";
    }
}

$marcos = new Humano;

echo "$marcos->maos <br>";
$marcos->falar();

class Professor extends Humano{
   public  $disciplina = "matematica";

   public function estaLecionando(){
    echo "O professor esta dando aula de $this->disciplina <br>";
   }
}

$joao = new Professor;
echo "$joao->pernas <br>";
echo "$joao->disciplina <br>";

$joao ->falar();

$joao->estaLecionando();