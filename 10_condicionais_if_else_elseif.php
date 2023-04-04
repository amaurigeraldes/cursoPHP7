<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais if, else e elseif no PHP</title>
</head>

<body>
    <h1>Condicionais if, else e elseif no PHP</h1>

    <?php 

    echo "<h2>1) Condicional Simples: if</h2><br>";
    echo "numero = 10; <br>";
    $numero = 10;
    echo "se(numero == 10) {'O número é igual a 10';} <br>";

    if($numero == 10) {
        echo "O número é igual a 10";
    }
    echo "<hr>";



    echo "<h2>2) Condicional Composta: if else</h2><br>";
    echo "numero = 15; <br>";
    $numero = 15;
    echo "se(numero == 10) {'O número é igual a 10';}else{'O número é diferente de 10';} <br>";
    
    if($numero == 10) {
        echo "O número é igual a 10";
    } else {
        echo "O número é diferente de 10";
    }
    echo "<hr>";



    echo "<h2>3) Condicional Composta: if elseif else</h2><br>";
    echo "numero = 7; <br>";
    $numero = 7;

    echo "se(numero == 10) {'O número é igual a 10';} elseif(numero <= 9){'O número é menor ou igual a 9';} else {'O número é diferente de 10';} <br>";

    if($numero == 10) {
        echo "O número é igual a 10";
    } elseif($numero <= 9) {
        echo "O número é menor ou igual a 9";
    } else {
        echo "O número é diferente de 10";
    }
    echo "<hr>";



    echo "<h2>4) Operador Ternário:</h2><br>";

    echo "media = 6; <br>";
    $media = 6;

    echo "(media >= 7) ? 'Aprovado!' : 'Reprovado!' <br>";
    echo "O sinal de '?' representa o if e o sinal de ':' representa o else <br>";

    echo ($media >= 7) ? "Aprovado!" : "Reprovado!";

    
    ?>

</body>

</html>