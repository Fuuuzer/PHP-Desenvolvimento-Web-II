<?php

class Pessoa {
    public $nome;
    public $idade;
    public $peso;
    public $altura;

    public function imprimirCadastro(){
        $this->nome = "joao";
        $this->idade = 19;
        $this->peso = 64;
        $this->altura = 1.75;
        echo "$this->nome <hr>";
        echo "$this->idade <hr>";
        echo "$this->peso <hr>";
        echo "$this->altura <hr>";
    }
}

$obj = new Pessoa;
$obj->imprimirCadastro();



?>