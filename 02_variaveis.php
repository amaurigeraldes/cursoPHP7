<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis PHP</title>
</head>

<body>
    <h1>Variáveis</h1>

    <?php 

    /* Nomes válidos
    $nome
    $_meunome
    $carro10
    $nota1
    $meu_nome
    $meuNome
    Obs.: O PHP é Case Sensitive
    */

    /* Nomes inválidos
    $123456nome
    $carro*&!#
    $meu carro
    */


    // Meus Dados:
    $nome = "Amaurí Geraldes";
    $idade = 60;
    $altura = 1.78;

    echo "<p>O meu nome é <strong>$nome</strong>, tenho <strong>$idade anos</strong> e <strong>". number_format($altura, 2, ",", ".") . "m</strong> de altura.</p>";
    

    // Alterando os Dados:
    $nome = "Vinícius Geraldes";
    $idade = 34;
    $altura = 1.70;

    echo "<p>O meu nome é <strong>$nome</strong>, tenho <strong>$idade anos</strong> e <strong>". number_format($altura, 2, ",", ".") . "m</strong> de altura.</p>";

    echo "<hr>";

    $carro = "Hilux";
    $Carro = "Fusca";

    $meunome = "Amaurí";
    $meuNome = "Vinícius";

    echo $carro;
    echo "<br>";
    echo $meuNome;

    ?>

</body>

</html>