<?php

class Pessoa {
    public $nome;
    public $idade;
    public $peso;
    public $altura;

    public function imprimirCadastro() {
        $this->nome = "Pedrinho Matador";
        $this->idade = 55;
        $this->peso = 80;
        $this->altura = 1.45;
        echo "$this->nome<hr>";
        echo "$this->idade<hr>";
        echo "$this->peso<hr>";
        echo "$this->altura<hr>";
    }
}

    $obj = new Pessoa;
    $obj->imprimirCadastro();



?>