<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos no PHP</title>
</head>

<body>
    <h1>Operadores Aritméticos no PHP</h1>

    <?php 

    /*
    Adição: +
    Subtração: -
    Multiplicação: *
    Divisão: /
    Módulo: %
    Exponenciação: **
    */

    $a = 5;
    $b = 2;
    $c = 7;
    $d = 15;

    echo "A soma de $a + $b é = ". $a + $b . "<br>";
    echo "A subtração de $a - $b é = ". $a - $b . "<br>";
    echo "A Multiplicação de $a * $b é = ". $a * $b . "<br>";
    echo "A Divisão de $a / $b é = ". $a / $b . "<br>";
    echo "O Módulo ou Resto da Divisão de $a % $b é = ". $a % $b . "<br>";
    echo "A Exponenciação de $a ** $b é = ". $a ** $b . "<br>";
    echo "A Média entre $a, $b, $c, $d é = ". ($a + $b + $c + $d) / 4 . "<br>";

    
    ?>

</body>

</html>