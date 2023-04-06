<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Números no PHP</title>
</head>

<body>
    <h1>Funções para Números no PHP</h1>

    <?php 
    /*
    number_format: Formatar o ponto flutuante, a virgula e o ponto
    round: Arredondamento Aritmético
    ceil:  Arredondamento para Cima
    floor: Arredondamento para Baixo
    rand: Gerador de números aleatórios
    */
    
    echo "01) number_format: Formatar o ponto flutuante, a virgula e o ponto <br>";
    $valor = 1234.56;
    $preco = number_format($valor, 2, ",", ".");
    echo "O valor do produto é R$ $valor <br>";
    echo "O valor do produto é R$ $preco <br>";
    echo "<hr>";


    echo "02) round: Arredondamento Aritmético <br>";
    $valor = 2.49;
    $preco = round($valor);
    echo "O valor do produto é $valor <br>";
    echo "O valor arredondado do produto é R$ $preco <br><br>";
    $valor = 2.5;
    $preco = round($valor);
    echo "O valor do produto é $valor <br>";
    echo "O valor arredondado do produto é R$ $preco <br><br>";
    echo "<hr>";



    echo "03) ceil:  Arredondamento para Cima <br>";
    $valor = 2.99;
    $preco = ceil($valor);
    echo "O valor do produto é $valor <br>";
    echo "O valor do produto arredondado para cima é R$ $preco <br><br>";
    $valor = 2.01;
    $preco = ceil($valor);
    echo "O valor do produto é $valor <br>";
    echo "O valor do produto arredondado para cima é R$ $preco <br><br>";
    echo "<hr>";


    echo "04) floor: Arredondamento para Baixo <br>";
    $valor = 2.99;
    $preco = floor($valor);
    echo "O valor do produto é $valor <br>";
    echo "O valor do produto arredondado para baixo é R$ $preco <br><br>";
    $valor = 2.01;
    $preco = floor($valor);
    echo "O valor do produto é $valor <br>";
    echo "O valor do produto arredondado para baixo é R$ $preco <br><br>";
    echo "<hr>";



    echo "05) rand: Gerador de números aleatórios <br>";
    $num = rand(0, 100);
    echo "Gerando um número aleatório entre 0 e 100... <br>";
    echo "O número gerado foi $num <br><br>";


    echo "MEGA SENA: gerando 6 números aleatórios entre 0 e 60... <br>";
    
    echo "Os números gerados foram: <br>";
    
    for ($i = 0; $i <= 5; $i++) {
        echo rand(0, 60) . " ";
    }; 
    echo "<hr>";

    # Generate a random 5 character A-Z 0-9  string
    for ($i=0; $i<6; $i++) { 

        $d=rand(1,30)%2; 
    
        echo $d ? chr(rand(65,90)) : chr(rand(48,57));
    };


    ?>

</body>

</html>