<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de Arrays no PHP</title>
</head>

<body>
    <h1>Funções de Arrays no PHP</h1>

    <?php 

    echo "<h2>Função is_array</h2>";
    echo "<h4>is_array(variável) verifica se a variável é um Array(Vetor), retornando true=1 ou false=vazio.</h4>";
    $nomes = array("Rodrigo", "Felipe", "Maria", "José");
    echo is_array($nomes) . "<br>";
    var_dump($nomes);
    echo "<br>";
    
    if(is_array($nomes)) {
        echo "É um array";
    }else{
        echo "Não é um array";
    }

    echo "<hr>";

    echo "<h2>Função in_array</h2>";
    echo "<h4>in_array(valor, variável) verifica se um determinado valor existe em alguma posição do Array(Vetor), retornando true=1 ou false=vazio.</h4>>";
    $nomes = array("Rodrigo", "Felipe", "Maria", "José");
    echo in_array("Rodrigo", $nomes) . "<br>";

    if(in_array("Rodrigo", $nomes)) {
        echo "Existe no array <br>";
    }else{
        echo "Não existe no array <br>";
    }

    echo "<hr>";

    echo "<h2>Função array_keys</h2>";
    echo "<h4>array_keys(variável) retorna um Novo Array com os Índices do Array passado como Parâmetro.</h4>";

    $nomes = array("Primo"=> "Rodrigo", "Cunhado"=> "Felipe", "Irmã"=> "Maria", "Tio"=> "José");
    
    $keys = array_keys($nomes);
    print_r($keys);
    echo "<br>";

    echo "<hr>";

    echo "<h2>Função array_values</h2>";
    echo "<h4>array_values(variável) retorna um Novo Array com os Valores do Array passado como Parâmetro.</h4>";

    $nomes = array("Primo"=> "Rodrigo", "Cunhado"=> "Felipe", "Irmã"=> "Maria", "Tio"=> "José");
    
    $values = array_values($nomes);
    print_r($values);
    echo "<br>";

    echo "<hr>";

    echo "<h2>Função array_merge</h2>";
    echo "<h4>array_merge(array1, array2) que vai agregar os elementos contidos em dois Arrays.</h4>";

    echo "<h4>Array carros:</h4>";
    $carros = array("Camaro", "Uno", "Gol");
    print_r($carros);
    echo "<br>";

    echo "<h4>Array motos:</h4>";
    $motos = array("Pop100", "50cc", "Cb1000");
    print_r($motos);
    echo "<br>";

    echo "<h4>Array veiculos: Merge carros + motos</h4>";
    $veiculos = array_merge($carros, $motos);
    print_r($veiculos);
    echo "<br>";

    echo "<hr>";

    echo "<h2>Função array_pop</h2>";
    echo "<h4>array_pop(array) exclui a <strong>Última Posição</strong> do Array.</h4>";

    echo "<h4>Array carros:</h4>";
    $carros = array("Camaro", "Uno", "Gol");
    print_r($carros);
    echo "<br>";

    echo "<h4>echo array_pop(carros): Mostra o elemento excluído do Array</h4>";
    echo array_pop($carros);

    echo "<h4>Após a execução do array_pop(carros):</h4>";
    print_r($carros);
    echo "<br>";


    echo "<hr>";


    echo "<h2>Função array_shift</h2>";
    echo "<h4>array_shift(array) exclui a <strong>Primeira Posição</strong> do Array.</h4>";

    echo "<h4>Array carros:</h4>";
    $carros = array("Camaro", "Uno", "Gol");
    print_r($carros);
    echo "<br>";
    
    echo "<h4>echo array_shift(carros): Mostra o elemento excluído do Array</h4>";
    echo array_shift($carros);
    
    echo "<h4>Após a execução do array_shift(carros):</h4>";
    print_r($carros);
    echo "<br>";

    
    echo "<hr>";


    echo "<h2>Função array_unshift</h2>";
    echo "<h4>array_unshift(array, 'n1', 'n2', 'n3', ..., 'nz') adiciona um ou mais elementos no INÍCIO do Array.</h4>";

    echo "<h4>Array frutas Inicial:</h4>";
    $frutas = array("Uva", "Laranja", "Maçã");
    print_r($frutas);
    array_unshift($frutas, "Banana", "Abacate", "Manga", "Mamâo");
    echo "<br>";
    echo "<h4>Array frutas Final:</h4>";
    print_r($frutas);
    echo "<br>";

    
    echo "<hr>";


    echo "<h2>Função array_push</h2>";
    echo "<h4>array_push(array, 'n1', 'n2', 'n3', ..., 'nz') adiciona um ou mais elementos no FINAL do Array.</h4>";

    echo "<h4>Array frutas Inicial:</h4>";
    $frutas = array("Uva", "Laranja", "Maçã");
    print_r($frutas);
    array_push($frutas, "Banana", "Abacate", "Manga", "Mamâo");
    echo "<br>";
    echo "<h4>Array frutas Final:</h4>";
    print_r($frutas);
    echo "<br>";

    
    echo "<hr>";


    echo "<h2>Função array_combine</h2>";
    echo "<h4>array_combine(keys, values) Mesclar os Elementos de dois Arrays.</h4>";

    echo "<h4>Array keys:</h4>";
    $keys = array("Campeão", "Vice-campeão", "Terceiro");
    print_r($keys);
    echo "<br>";

    echo "<h4>Array values:</h4>";
    $values = array("Palmeiras", "Água Santa", "Curikas");
    print_r($values);
    echo "<br>";

    echo "<h4>Array times: array_combine(keys, values)</h4>";
    $times = array_combine($keys, $values);
    print_r($times);
    echo "<br>";
    
    
    echo "<hr>";


    echo "<h2>Função array_sum</h2>";
    echo "<h4>array_sum(values) Somar os elementos de um Array.</h4>";

    echo "<h4>Array soma:</h4>";
    $soma = array(5, 6, 10, 8, 5.5, 9.3, 6.3);
    print_r($soma);
    echo "<br>";

    $total = array_sum($soma);
    echo "Soma Total = " . ($total);
    echo "<br>";

    var_dump($soma);

    
    echo "<hr>";


    echo "<h2>Função explode()</h2>";
    echo "<h4>explode() Transforma uma String em um Array.</h4>";

    echo "EXEMPLO: <br>";
    echo "<h4>String data:</h4>";
    $data = "30/02/2018";
    echo $data; 
    echo "<br>";

    var_dump($data);
    echo "<br>";
    echo "<br>";

    echo "<h4>novaData = explode('/', data); Transformando a String Data em um Array novaData:</h4>";
    $novaData = explode("/", $data);

    echo "<h4>Array novaData:</h4>";
    print_r($novaData);
    echo "<br>";

    var_dump($novaData);
    echo "<br>";
    echo "<hr>";

    echo "OUTRO EXEMPLO: <br>";

    $frase = "O meu nome não é Johnny";

    $texto = explode(" ", $frase);
    print_r($texto);


    echo "<hr>";


    echo "<h2>Função implode()</h2>";
    echo "<h4>implode(',', array) Transforma um Array em uma String.</h4>";

    $nomes = array("Rodrigo", "Carlos", "Neuza", "Talita");
    print_r($nomes);
    echo "<br>";
    echo "<br>";
    var_dump($nomes);
    echo "<br>";
    echo "<br>";

    $texto = implode(",", $nomes);
    echo $texto;
    echo "<br>";
    var_dump($texto);
    echo "<br>";

    ?>

</body>

</html>