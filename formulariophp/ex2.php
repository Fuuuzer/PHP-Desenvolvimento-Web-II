<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
    /*function imprimirNome($name){
        echo "meu nome é $name <hr>";
    }

    imprimirNome('Maria Eduarda');
    imprimirNome('Derlis');
    imprimirNome('Richard');*/

    // function megaSena(){
    //     $numero1 = rand(0, 50);
    //     $numero2 = rand(0, 50);
    //     $numero3 = rand(0, 50);
    //     $numero4 = rand(0, 50);
    //     $numero5 = rand(0, 50);
    //     $numero6 = rand(0, 50); 
    //     echo "o número da sorte é $numero1 $numero2 $numero3 $numero4 $numero5 $numero6";
    // }


    function calcularMedia($nome, $nota1, $nota2, $nota3) {
        $media = ($nota1 + $nota2 +$nota3);
        if ($media >=6) {
            echo "<p>$nome foi aprovado, a sua media é </p>".number_format($media, 2)."<hr>";
        } else {
            echo "<p class='jonas'>$nome foi reprovado, a sua media é</p> ".number_format($media, 2)."<hr>";
        }
    } 
    calcularMedia('Josivaldo', 10, 10,4);
?>   


</body>
</html>
