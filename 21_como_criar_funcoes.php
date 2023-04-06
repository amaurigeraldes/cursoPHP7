<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como criar Funções no PHP</title>
</head>

<body>

    <h1>Como criar Funções no PHP</h1>
    
    <?php 
    function exibirNome() {
        echo "Meu nome é Amaurí Geraldes";
    }
    exibirNome();
    echo "<hr>";


    
    function exibirDados($nome) {
        echo "Meu nome é $nome";
    }
    exibirDados("Amaurí Geraldes");
    echo "<hr>";


    function calcMedia($aluno, $n1, $n2, $n3, $n4) {
        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        if($media >= 7) {
            echo "$aluno foi aprovado(a) com a média $media <br>";
        } else {
            echo "$aluno foi reprovado(a) com a média $media <br>";
        }
    }
    calcMedia("Bob", 5.5, 7, 5, 9);
    calcMedia("Anna", 6, 7, 6.5, 9);
    echo "<hr>";





    ?>

</body>

</html>