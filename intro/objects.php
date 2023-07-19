<?php

class Pessoa {

    function falar(){
        echo "Olá";
    }
}

$marcos = new Pessoa();

$marcos->nome = "Marcos";
$marcos->idade = 25;

echo $marcos->falar();