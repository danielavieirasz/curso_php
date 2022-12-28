<?php

use Animal as GlobalAnimal;

class Humano {

}

class Animal {

}

class Professor extends Humano{

}

$marcos = new Humano;
$turca = new animal;

if($marcos instanceof humano){
    echo "Marcos é um humano <br>";

}else{
    echo "Marcos não é um humano <br>";
} 

if($turca instanceof humano){
    echo "Turca é um humano <br>";

}else{
    echo "A Turca não é um humano <br>";
} 

$pedro = new Professor; 

if($pedro instanceof Professor){
    echo "Pedro é um professor <br>";

}else{
    echo "Pedro não é um professor <br>";
} 

if($pedro instanceof humano){
    echo "Pedro é um humano <br>";

}else{
    echo "Pedro não é um humano <br>";
} 
if($turca instanceof professor){
    echo "Turca é um professor <br>";

}else{
    echo "A Turca não é um professor <br>";
} 
