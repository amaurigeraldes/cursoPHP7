<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos no PHP</title>
</head>

<body>

    <h1>Operadores Lógicos no PHP</h1>
    
    <?php 
    
    /*
    e (and ou &&): 
    TRUE: Se as duas expressões forem TRUE
    FALSE: Se uma das duas expressões for FALSE

    ou (or ou ||):
    TRUE: Se uma das expressões for TRUE
    FALSE: Se as duas expressões forem FALSE
    
    ou exclusivo (xor):
    TRUE: Se uma das expressões for TRUE
    FALSE: Se as duas expressões foram TRUE

    negação (!):
    Inverte o Estado Lógico da Expressão
    TRUE: Not False
    FALSE: Not True

    */


    $idade = 25;
    $nome = "Rodrigo";

    $anos = 25;
    $pessoa = "Rodrigo";

    echo "01) Operador e (and ou &&) <br>";
    if(($idade == $anos) and ($nome == $pessoa)) {
        echo "<strong>VERDADEIRO</strong>: se a 'idade' = <strong>$idade</strong> é igual a 'anos' = <strong>$anos, 'E'</strong> o 'nome' = <strong>$nome</strong> é igual a 'pessoa' = <strong>$pessoa</strong>. <br>";
    } else {
        echo "<strong>FALSO</strong>: se a 'idade' = <strong>$idade</strong> não é igual a 'anos' = <strong>$anos, 'OU'</strong> o 'nome' = <strong>$nome</strong> não é igual a 'pessoa' = <strong>$pessoa</strong>. <br>";
    }
    echo "<hr>";



    echo "02) Operador ou (or ou ||) <br>";
    if(($idade == $anos) or ($nome == $pessoa)) {
        echo "<strong>VERDADEIRO</strong>: se a 'idade' = <strong>$idade</strong> é igual a 'anos' = <strong>$anos, 'OU'</strong> o 'nome' = <strong>$nome</strong> é igual a 'pessoa' = <strong>$pessoa</strong>. <br>";
    } else {
        echo "<strong>FALSO</strong>: se a 'idade' = <strong>$idade</strong> não é igual a 'anos' = <strong>$anos, 'OU'</strong> o 'nome' = <strong>$nome</strong> não é igual a 'pessoa' = <strong>$pessoa</strong>. <br>";
    }
    echo "<hr>";



    echo "03) Operador ou exclusivo (xor) <br>";
    if(($idade == $anos) xor ($nome == $pessoa)) {
        echo "<strong>VERDADEIRO</strong>: se a 'idade' = <strong>$idade</strong> é igual a 'anos' = <strong>$anos, 'OU'</strong> o 'nome' = <strong>$nome</strong> é igual a 'pessoa' = <strong>$pessoa</strong>. <br>";
    } else {
        echo "<strong>FALSO</strong>: se a 'idade' = <strong>$idade</strong> é igual a 'anos' = <strong>$anos, 'E'</strong> o 'nome' = <strong>$nome</strong> é igual a 'pessoa' = <strong>$pessoa</strong>. <br>";
    }
    echo "<hr>";



    echo "04) Operador Negação (!) <br>";
    echo "! Inverte o Estado Lógico da Expressão <br>";
    if(!($idade == $anos) and ($nome == $pessoa)) {
        echo "<strong>VERDADEIRO</strong>: se a 'idade' = <strong>$idade</strong> não é igual a 'anos' = <strong>$anos, 'OU'</strong> o 'nome' = <strong>$nome</strong> não é igual a 'pessoa' = <strong>$pessoa</strong>. <br>";
    } else {
        echo "<strong>FALSO</strong>: se a 'idade' = <strong>$idade</strong> não é igual a 'anos' = <strong>$anos, 'OU'</strong> o 'nome' = <strong>$nome</strong> não é igual a 'pessoa' = <strong>$pessoa</strong>. <br>";
    }
    echo "<hr>";



    ?>

</body>

</html>