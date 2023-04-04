<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes no PHP</title>
</head>

<body>
    <h1>Constantes no PHP</h1>
    <?php 

    echo "Constante string<br>";
    define("NOME", "Amaurí Geraldes");
    echo NOME;
    echo "<br>";
    var_dump(NOME);
    echo "<hr>";
    echo "Constante int<br>";
    define("IDADE", 60);
    echo IDADE;
    echo "<br>";
    var_dump(IDADE);
    echo "<hr>";
    echo "Constante float<br>";
    define("ALTURA", 1.78);
    echo ALTURA;
    echo "<br>";
    var_dump(ALTURA);
    echo "<hr>";
    echo "Constante bool<br>";
    define("CASADO", true);
    echo CASADO;
    echo "<br>";
    var_dump(CASADO);
    echo "<hr>";
    echo "O meu nome é <strong>" .NOME. "</strong> tenho <strong>" .IDADE. " anos</strong> de idade e a minha altura é de <strong>" .ALTURA. "m</strong>.";
    echo "<hr>";
    
    # As Constantes, diferentemente das Variáveis, são Globais:
    echo "Constante array<br>";
    define("TIMES", ['Palmeiras', 'Vasco', 'Santos']);
    echo TIMES[0];
    echo "<br>";
    var_dump(TIMES);
    echo "<hr>";

    function exibeNome() {
        echo NOME;
    }
    exibeNome();

    ?>

</body>

</html>