<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>

<body>

    <h1>Arrays no PHP</h1>

    <?php 
    echo "<h2>Criando Array Carros</h2>";
    echo "Criando um Array e definindo os Indices:<br>";
    $carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
    print_r($carros);
    echo "<br>";
    echo "Criando um Array com Indices automáticos a partir [0]:<br>";
    $carros = array("BMW", "Veloster", "Hilux");
    print_r($carros);
    echo "<br>";

    echo "<hr>";

    echo "<h2>Incluindo Novos Elementos em Arrays</h2>";
    echo "variavel[] = item; para incluir um Novo Elemento em um Array<br>";
    print_r($carros);
    echo "<br>";
    $carros[] = "Amarok";
    print_r($carros);
    echo "<br>";
    $carros[10] = "Camaro";
    print_r($carros);
    echo "<br>";
    echo $carros[0];
    echo "<br>";
    echo $carros[1];
    echo "<br>";
    echo $carros[2];
    echo "<br>";
    echo $carros[3];
    echo "<br>";
    echo $carros[10];
    echo "<br>";

    echo "<hr>";

    echo "<h2>Criando Array Motos</h2>";
    $motos = array();
    $motos[] = "Yamaha";
    $motos[] = "Honda";
    $motos[5] = "Suzuki";
    print_r($motos);
    echo "<br>";
    echo $motos[0];
    echo "<br>";
    echo $motos[1];
    echo "<br>";
    echo $motos[5];
    echo "<br>";

    echo "<hr>";

    echo "<h2>Criando Array Clientes</h2>";
    $clientes = ["Amaurí", "Angela", "Vinícius", "Gabriela"];
    print_r($clientes);
    echo "<br>";
    echo $clientes[0];
    echo "<br>";
    echo $clientes[1];
    echo "<br>";
    echo $clientes[2];
    echo "<br>";
    echo $clientes[3];
    echo "<br>";

    echo "<hr>";

    echo "<h2>Contando Elementos de Arrays</h2>";
    echo "Contar a qtde de elementos de um Array: count(var)<br>";
    $totCarros = count($carros);
    $totMotos = count($motos);
    $totClientes = count($clientes);

    echo "Qtde total do array carros = $totCarros elementos.";
    echo "<br>";
    echo "Qtde total do array motos = $totMotos elementos.";
    echo "<br>";
    echo "Qtde total do array clientes = $totClientes elementos.";
    echo "<br>";
    
    echo "<hr>";

    echo "Looping para percorrer Arrays: foreach() {} <br>";
    foreach($carros as $carro) {
        echo $carro . "<br>";
    }

    echo "<hr>";

    echo "<h2>Looping para percorrer Arrays</h2>";
    echo "Looping para percorrer Arrays: foreach() {} <br>";
    foreach($motos as $moto) {
        echo $moto . "<br>";
    }

    echo "<hr>";

    echo "Looping para percorrer Arrays: foreach() {} <br>";
    foreach($clientes as $cliente) {
        echo $cliente . "<br>";
    }

    echo "<hr>";

    echo "<h2>Arrays Associativos</h2>";
    echo "Arrays Associativos: quando os Índices são Strings<br>";
    $dados = array("nome"=> "Amaurí", "idade"=> 60, "altura"=> 1.78);
    # Incluir mais elementos num Array Associativo:
    $dados["cidade"] = "São Paulo";
    # Mostrar os Dados de um Array Associativo:
    echo $dados["nome"] . "<br>";
    echo $dados["idade"] . "<br>";
    echo $dados["altura"] . "<br>";
    echo $dados["cidade"] . "<br>";

    print_r($dados);
    echo "<br>";

    echo "<hr>";

    echo "<h2>Looping para percorrer Arrays Associativos</h2>";
    # As Variáveis $indice e $valor foram criadas para percorrer.
    foreach($dados as $indice => $valor) {
        echo $indice . " : " . $valor . "<br>";
    }

    echo "<hr>";

    echo "<h2>Arrays Multidimensionais</h2>";
    # São Arrays que contém dois ou mais Arrays:
    
    $times = array(
        "cariocas"=> array("Vasco", "Botafogo", "Fluminense", "Varmengo"),
        "paulistas"=>array("Campeão"=> "Palmeiras", "vice"=> "Santos", "terceiro"=> "Trikas", "quarto"=> "Curikas"),
        "baianos"=>array("Bahia", "Vitória", "Itabuna")
    );

    echo "print_r(times) <br>";
    print_r($times);
    echo "<br>";
    echo "<br>";

    echo "var_dump(times) <br>";
    var_dump($times);
    echo "<br>";
    echo "<br>";

    # Selecionando um Time dentro do Array Multidimensional
    echo $times["cariocas"][0];
    echo "<br>";
    echo  "O <strong>BI-Campeão Paulista</strong> de 2022 e 2023 é o <strong>". $times["paulistas"]["Campeão"] . "</strong>, <strong>AVANTI PALESTRA!</strong>";
    echo "<br>";

    echo "<hr>";

    echo "<h2>Looping para percorrer Arrays Multidimensionais</h2>";
    # As Variáveis $indice e $valor foram criadas para percorrer.
    foreach($times["paulistas"] as $indice => $valor) {
        echo $indice . " : " . $valor . "<br>";
    }

    

    echo "<hr>";


    ?>

</body>

</html>