<?php

echo "<h1>Expressões Regulares no PHP</h1>";

/*
Define um padrão a ser utilizado para procurar ou substituir palavras ou grupo de palavras.

^ Início da expressão;
$ Final da expressão;
/i Case Sensitive;
[] Conjunto de caracteres;
{} Ocorrências: ?{0,1} *{0,} +{1,};
/^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/

*/

$string = "abc"; 
$padrao = "/^a/"; # Somente começando com a
$padrao = "/^abc$/"; # Cmeçando com a e terminando com c 

$string = "y"; 
$padrao = "/^[a-z0-9]$/"; # Somente 1 ocorrência 

$string = "Q";
$padrao = "/^[a-z0-9]$/i";  # /i Letras Maiúsculas

$string = "Q1x2"; 
$padrao = "/^[a-z0-9]{1,4}$/i"; # De 1 a 4 ocorrências

$string = "Q1x2G4"; 
$padrao = "/^[a-z0-9]{6}$/i"; # Somente 6 ocorrências

$string = ""; 
$padrao = "/^[a-z0-9]?$/i"; # ? Vazio ou uma ocorrência

$string = "xyz5666"; 
$padrao = "/^[a-z0-9]*$/i"; # * Vazio ou várias ocorrências

$string = "xyz5666abc"; 
$padrao = "/^[a-z0-9]+$/i"; # * Uma ou mais ocorrências

# VALIDAÇÃO PARA UM FORMATO DE E-MAIL:
$string = "contato@gmail.org.br"; 
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

# VALIDAÇÃO PARA UM FORMATO DE DATA:
$string = "13/09/2019"; 
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";


if(preg_match($padrao, $string)) {
    echo "Válido";
    echo "<hr>";
    echo $string;
} else {
    echo "Inválido";
    echo "<hr>";
}
