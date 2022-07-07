<?php

class Cadastro {
    public $nota1;
    public $nota2;

    public function calcularMedia() {
        if (isset($_POST['enviar'])){

        
        $this->nota1 = $_POST['nota1'];
        $this->nota2 = $_POST['nota2'];
        $media = ( $this->nota1 + $this->nota2)/2;
        echo "a sua média é $media";
        }
    }
}

?>
