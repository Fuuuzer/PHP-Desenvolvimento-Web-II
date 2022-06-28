<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulário html</title>
</head>
<body>
<?php
    include ('verificar.php');
    ?>


    <div class= "grid">
    <form action="" method="post">
        <label for="">Nome Completo:</label> <br>
         <input type="text" placeholder="Digite o seu nome" name="nome" minlength="2" maxlength="50" required> <br>
        <label for="">Email</label> <br>
        <input type="email" placeholder="Digite seu Email" name="email" required> <br>
        <input type="submit" value="enviar" name="enviar">
        <input type="reset" value="limpar">

    </form>
    </div>

</body>
</html>