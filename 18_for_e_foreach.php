<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For e Foreach no PHP</title>
</head>

<body>

    <h1>For e Foreach no PHP</h1>
    
    <?php 

    echo "Usando o for:<br>";
    for ($contador = 0; $contador <=10; $contador++) {
        echo "O contador é $contador <br>";
    };
    echo "<hr>";

    echo "Fazendo a Tabuada do 8 usando o for: <br>";
    for ($contador = 0; $contador <=10; $contador++) {
        echo "8 x $contador = " . 8 * $contador . "<br>";
    };


    echo "<hr>";

    echo "Usando o foreach: <br>";
    echo "É utilizado para percorrer Arrays(Vetores) <br>";
    echo "Exibindo os Valores: <br>";
    $cores = array("Verde", "Vermelho", "Azul");
    foreach($cores as $valor) {
        echo $valor . "<br>";
    }


    echo "<hr>";

    echo "Usando o foreach: <br>";
    echo "É utilizado para percorrer Arrays(Vetores) <br>";
    echo "Exibindo os Índices e os Valores: <br>";
    $cores = array("Verde", "Vermelho", "Azul", "Amarelo");
    foreach($cores as $indice => $valor) {
        echo $indice . " : " . $valor . "<br>";
    }




    ?>

</body>

</html>