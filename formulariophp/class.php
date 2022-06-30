<?php

    class Pessoa {
        public $nome; //Atributos
        public $idade; //Atributos

        public function Falar() {
            echo "Estou falando <br>"; //Método
        
    }
}
class Humano extends Pessoa{
    public function Falar(){echo "A filha falou";
    }
}

    $obj = new Pessoa();
    $obj = new Humano();

    $obj->Falar();
    $oj->nome = 'Penisvaldo Soares Pinto';
    $obg->idade = '69';
    echo "meu nome é $obj->nome";


?>