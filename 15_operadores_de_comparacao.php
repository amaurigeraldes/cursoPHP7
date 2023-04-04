<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação no PHP</title>
</head>

<body>

    <h1>Operadores de Comparação no PHP</h1>
    
    <?php 

    /*
    ==      Igual
    !=      Não igual
    ===     Identico
    !==     Não identico
    <>      Diferente
    <       Menor que
    >       Maior que
    >=      Maior ou igual a
    <=      Menor ou igual a
    <=>     Space ship (Retorna -1, 0 ou 1)
    */

    $a = 15;
    $b = 5;

    echo "01) == Operador de Igualdade <br>";
    if($a == $b) {
        echo "'a' = $a é igual a 'b' = $b <br>";
    } else {
        echo "'a' = $a não é igual a 'b' = $b <br>";
    }
    echo "<hr>";


    echo "02) != Operador de Não Igualdade <br>";
    if($a != $b) {
        echo "'a' = $a não é igual a 'b' = $b <br>";
    } else {
        echo "'a' = $a é igual a 'b' = $b <br>";
    }
    echo "<hr>";


    echo "03) === Operador de Identidade <br>";
    if($a === $b) {
        echo "'a' = $a é idêntico a 'b' = $b <br>";
    } else {
        echo "'a' = $a não é idêntico a 'b' = $b <br>";
    }
    echo "<hr>";


    echo "04) !== Operador de Não Identidade <br>";
    if($a !== $b) {
        echo "'a' = $a não é idêntico a 'b' = $b <br>";
    } else {
        echo "'a' = $a é idêntico a 'b' = $b <br>";
    }
    echo "<hr>";


    echo "05) <> Operador de Diferente <br>";
    if($a <> $b) {
        echo "'a' = $a é diferente de 'b' = $b <br>";
    } else {
        echo "'a' = $a não é diferente de 'b' = $b <br>";
    }
    echo "<hr>";


    echo "06) < Operador de Menor que <br>";
    if($a < $b) {
        echo "'a' = $a é menor que 'b' = $b <br>";
    } else {
        echo "'a' = $a não é menor que 'b' = $b <br>";
    }
    echo "<hr>";


    echo "07) > Operador de Maior que <br>";
    if($a > $b) {
        echo "'a' = $a é maior que 'b' = $b <br>";
    } else {
        echo "'a' = $a não é maior que 'b' = $b <br>";
    }
    echo "<hr>";


    echo "08) >= Operador de Maior ou igual a <br>";
    if($a >= $b) {
        echo "'a' = $a é maior ou igual a 'b' = $b <br>";
    } else {
        echo "'a' = $a não é maior ou igual a 'b' = $b <br>";
    }
    echo "<hr>";


    echo "09) <= Operador de Menor ou igual a <br>";
    if($a <= $b) {
        echo "'a' = $a é menor ou igual a 'b' = $b <br>";
    } else {
        echo "'a' = $a não é menor ou igual a 'b' = $b <br>";
    }
    echo "<hr>";


    echo "10) <=> Operador Space ship (Retorna -1, 0 ou 1) <br>";
    var_dump($a <=> $b);
    echo "<br>";
    var_dump($a <=> $a);
    echo "<br>";
    var_dump($b <=> $a);
    echo "<br>";
    echo "<hr>";
    


    ?>

</body>

</html>