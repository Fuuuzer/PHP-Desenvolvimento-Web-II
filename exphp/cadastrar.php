<?php 
    class Cadastro{
        public $nome;
        public $idade;
        public $peso;
        public $altura;
        
        public function cadastrar() {
            //metodo
            $this->nome = $_POST['name'];
            $this->idade = $_POST['idade'];
            $this->peso = $_POST['peso'];
            $this->altura = $_POST['altura'];
            echo "$this->nome <hr>";
            echo "$this->idade <hr>";
            echo "$this->peso <hr>";
            echo "$this->altura <hr>";
            
        }
    }

    $cad = new Cadastro;
    $cad->cadastrar();
?>