<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento e Decremento no PHP</title>
</head>

<body>

    <h1>Operadores de Incremento e Decremento no PHP</h1>

    <?php 

    /*
                                        Pós         Pré
    $a = $a + 1;        $a += 1;        $a++;       ++$a;
    $a = $a - 1;        $a -= 1;        $a--;       --$a;
    */
    
    $a = 20;
    echo "<strong>Pré-incremento</strong>: <br>";
    echo "O valor de 'a' é = $a e com o pré-incremento passará a ser = " . ++$a . "<br>";
    echo "O valor de 'a' é = $a e com o pré-incremento passará a ser = " . ++$a . "<br>";
    echo "<hr>";

    $a = 20;
    echo "<strong>Pós-incremento</strong>: <br>";
    echo "O valor de 'a' é = $a e com o pós-incremento passará a ser = " . $a++ . "<br>";
    echo "O valor de 'a' é = $a e com o pós-incremento passará a ser = " . $a++ . "<br>";
    echo "<hr>";


    ?>

</body>

</html>