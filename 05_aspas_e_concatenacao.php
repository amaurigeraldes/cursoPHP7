<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspas Simples, Duplas e Concatenação em PHP</title>
</head>

<body>
    <h1>Aspas Simples, Duplas e Concatenação em PHP</h1>
    <?php 
    
    $nome = "Amaurí Geraldes";
    echo $nome;

    echo "<hr>";

    echo "<br><strong>Observar que:</strong>";
    echo "<br>";
    echo "<br>Ao usar as Aspas Simples não é mostrado o Valor da Variável:";
    echo '<br>Meu nome é $nome e tenho \'60\' anos.';
    echo "<br>";
    echo "<br>Podemos resolver isso, usando a concatenação:";
    echo '<br>Meu nome é ' . $nome . ' e tenho \'60\' anos.';
    echo "<br>";
    echo "<br>Ou usando as Aspas Duplas (Interpretativas):";
    echo "<br>Meu nome é '$nome' e tenho '60' anos.";

    ?>

</body>

</html>