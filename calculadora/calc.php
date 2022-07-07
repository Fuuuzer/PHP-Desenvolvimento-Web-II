<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form class="form" action="" method="post">
            <h2>Calculadora de média</h2>
            <label for="">Digite a primeira Nota</label> <br>
            <input type="text" placeholder="Digite uma nota" required name="nota1"> <br>
            <label for="">Digite a segunda Nota</label> <br>
            <input type="text" placeholder="Digite a segunda nota" required name="nota2"><br>
            <input type="submit" value="calcular" name="enviar">
            <input type="reset" value="limpar">
            <?php
            include('calcular.php');
            $obj = new Cadastro;
            $obj->calcularMedia();

            ?>
        </form>
    </main>
    

</body>
</html>