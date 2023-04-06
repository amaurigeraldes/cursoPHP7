<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Strings no PHP</title>
</head>

<body>
    
    <h1>Funções para Strings no PHP</h1>
    
    <?php 
    /*
    strtoupper: Converte uma string para maiúsculas
    strtolower: Converte uma string para minúsculas
    substr: Retorna parte de uma string
    str_pad: Complementa uma string com uma qtde de caracteres
    str_repeat: É utilizada para repetir uma string
    strlen: Retorna o comprimento de uma string
    str_replace: Substituir uma palavra em uma string
    strpos: Retorna a posição de uma palavra em uma string
    */

    echo "01) strtoupper: Converte para maiúsculas <br>";
    $nome = "amauri geraldes";
    $nomeNovo = strtoupper($nome);
    echo "Transforma letras mínúsculas $nome em maiúsculas $nomeNovo <br>";
    echo "<hr>";
    

    echo "02) strtolower: Converte para mínúsculas <br>";
    $nome = "AMAURI GERALDES";
    $nomeNovo = strtolower($nome);
    echo "Transforma letras maiúsculas $nome em mínúsculas $nomeNovo <br>";
    echo "<hr>";


    echo "03) substr: Retorna parte de uma string <br>";
    $nome = "AMAURI GERALDES";
    $nomeNovo = substr($nome, 7);
    echo "Retorna parte de um texto $nome em $nomeNovo <br>";
    $nomeNovo = substr($nome, 1, 5);
    echo "Retorna parte de um texto $nome em $nomeNovo <br>";
    echo "<hr>";


    echo "04) str_pad: Complementa uma string com uma qtde de caracteres <br>";
    $nome = "AMAURI GERALDES"; # <= a string tem 15 caracteres
    $nomeNovo = str_pad($nome, 20, "*"); # <= aumentando para 20 caracteres
    echo "Complementa um texto $nome em $nomeNovo <br>";
    $nomeNovo = str_pad($nome, 20, "*", STR_PAD_LEFT); # RIGHT é Default
    echo "Complementa um texto $nome em $nomeNovo <br>";
    $nomeNovo = str_pad($nome, 20, "*", STR_PAD_BOTH);
    echo "Complementa um texto $nome em $nomeNovo <br>";
    echo "<hr>";


    echo "05) str_repeat: É utilizada para repetir uma string <br>";
    $nome = "AMAURI GERALDES "; 
    $nomeNovo = str_repeat($nome, 4);
    echo "Repete um texto $nome em $nomeNovo <br>";
    echo "<hr>";



    echo "06) strlen: Retorna o comprimento de uma string <br>";
    $nome = "AMAURI MOREIRA GERALDES"; 
    $nomeNovo = strlen($nome);
    echo "Retorna o comprimento de um texto $nome = $nomeNovo <br>";
    echo "<hr>";


    echo "07) str_replace: Substituir uma palavra em uma string <br>";
    $nome = "AMAURI GERALDES"; 
    $nomeNovo = str_replace("AMAURI", "VINICIUS", $nome);
    echo "Substitui uma palavra em um texto $nome = $nomeNovo <br>";
    echo "<hr>";


    echo "08) strpos: Retorna a posição de uma palavra em uma string <br>";
    $nome = "AMAURI MOREIRA GERALDES"; 
    $nomeNovo = strpos($nome, "GERALDES");
    echo "Retorna a posição de uma palavra em um texto $nome = $nomeNovo <br>";
    echo "<hr>";


    ?>

</body>

</html>