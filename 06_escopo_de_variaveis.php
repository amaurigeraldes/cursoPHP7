<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo de Variáveis no PHP</title>
</head>

<body>
    <h1>Escopo de Variáveis no PHP</h1>
    
    <?php 
        # Variáveis definidas no Escopo Global
        $nome = "Amaurí Geraldes";
        $a = 1;
        $b = 3;
        $c = 7;

        # Criando uma função e definindo o Escopo da Variável
        function exibeNome() {
            global $nome; # Definindo no Escopo Local
            echo $nome;
        }
        exibeNome();

        echo "<hr>";

        # Criando uma função e definindo o Escopo da Variável
        function exibeCidade() {
            global $cidade; # Definindo no Escopo Local
            $cidade = "Rio de Janeiro";
        }
        exibeCidade();
        echo $cidade;

        echo "<hr>";

        # Criando a Função soma usando o parâmetro $GLOBALS['']
        function soma() {
            echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
        }
        soma();

    ?>

</body>

</html>