<?php 

if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = 'Mensagem enviada com sucesso';
    echo $msg;
    unset($msg);

}
