<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição no PHP</title>
</head>

<body>

    <h1>Operadores de Atribuição no PHP</h1>
    
    <?php 

    echo "Soma <br>";
    echo "a = a + b, ou a += b; <br>";
    $a = 10;
    $b = 5;
    echo "'a' = $a e 'b' = $b <br>";
    $a = $a + $b; # é o mesmo que $a += $b;
    echo $a . "<br>";

    $a = 10;
    $b = 5;
    $a += $b;
    echo $a . "<br>";

    echo "<hr>";


    echo "Subtração <br>";
    echo "a = a - b, ou a -= b; <br>";
    $a = 10;
    $b = 5;
    echo "'a' = $a e 'b' = $b <br>";
    $a = $a - $b; # é o mesmo que $a -= $b;
    echo $a . "<br>";

    $a = 10;
    $b = 5;
    $a -= $b;
    echo $a . "<br>";

    echo "<hr>";


    echo "Multiplicação <br>";
    echo "a = a * b, ou a *= b; <br>";
    $a = 10;
    $b = 5;
    echo "'a' = $a e 'b' = $b <br>";
    $a = $a * $b; # é o mesmo que $a *= $b;
    echo $a . "<br>";

    $a = 10;
    $b = 5;
    $a *= $b;
    echo $a . "<br>";

    echo "<hr>";


    echo "Divisão <br>";
    echo "a = a / b, ou a /= b; <br>";
    $a = 10;
    $b = 5;
    echo "'a' = $a e 'b' = $b <br>";
    $a = $a / $b; # é o mesmo que $a /= $b;
    echo $a . "<br>";

    $a = 10;
    $b = 5;
    $a /= $b;
    echo $a . "<br>";

    echo "<hr>";


    echo "Módulo (Resto da Divisão) <br>";
    echo "a = a % b, ou a %= b; <br>";
    $a = 5;
    $b = 2;
    echo "'a' = $a e 'b' = $b <br>";
    $a = $a % $b; # é o mesmo que $a %= $b;
    echo $a . "<br>";

    $a = 5;
    $b = 2;
    $a %= $b;
    echo $a . "<br>";

    echo "<hr>";
    

    echo "Potenciação <br>";
    echo "a = a ** b, ou a **= b; <br>";
    $a = 5;
    $b = 3;
    echo "'a' = $a e 'b' = $b <br>";
    $a = $a ** $b; # é o mesmo que $a **= $b;
    echo $a . "<br>";

    $a = 5;
    $b = 3;
    $a **= $b;
    echo $a . "<br>";

    echo "<hr>";



    ?>

</body>

</html>