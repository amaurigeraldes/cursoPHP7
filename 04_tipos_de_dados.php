<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Dados PHP</title>
</head>

<body>
    <h1>Tipos de Dados PHP</h1>
    <?php 
    echo "TIPOS DE DADOS:<br><br>";
    echo "1 - Tipos Escalares <br>";
    
    echo "1.1 - Tipo string: <br><br>";
    echo "Exemplo: <br>";
    $nome = "Olá, Mundo!";
    echo $nome;
    echo "<br>";
    var_dump($nome);
    echo "<br>";
    if(is_string($nome)) {
        echo "É uma string";
    }else{
        echo "Não é uma string";
    }
    echo "<hr>";

    echo "1.2 - Tipo int: <br><br>";
    echo "Exemplo: <br>";
    $idade = 27;
    echo $idade;
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    if(is_int($idade)) {
        echo "É um inteiro";
    }else{
        echo "Não é um inteiro";
    }
    echo "<hr>";

    echo "1.3 - Tipo float: <br><br>";
    echo "Exemplo: <br>";
    $altura = 1.78;
    echo $altura;
    echo "<br>";
    var_dump($altura);
    echo "<br>";
    if(is_float($altura)) {
        echo "É um float";
    }else{
        echo "Não é um float";
    }
    echo "<hr>";

    echo "1.4 - Tipo bool: <br><br>";
    echo "Exemplo: <br>";
    $admin = true;
    echo $admin; // Se true=1 e se false=vazio
    echo "<br>";
    var_dump($admin);
    echo "<br>";
    if(is_bool($admin)) {
        echo "É um bool";
    }else{
        echo "Não é um bool";
    }
    echo "<hr>";

    echo "2 - Tipos Compostos <br>";
    echo "2.1 - Tipo array (vetor): <br><br>";
    echo "Exemplo: <br>";
    $carros = array("Gol", "Uno", "Camaro", 12, 1.78, true);
    echo "<br>";
    echo "print_r() para mostrar um array: <br>";
    print_r($carros);
    echo "<br>";
    echo "var_dump() para mostrar um array: <br>";
    var_dump($carros);
    echo "<br>";
    if(is_array($carros)) {
        echo "É um array";
    }else{
        echo "Não é um array";
    }
    echo "<hr>";

    echo "2.2 - Tipo object: <br><br>";
    echo "Exemplo: <br>";
    class Cliente {
        public $nome;
        public function atribuirNome($nome) {
            $this->$nome = $nome;
        }
    }
    $cliente = new Cliente();
    $cliente->atribuirNome("Amaurí");

    echo $cliente->nome;
    echo "<br>";
    var_dump($cliente);
    echo "<br>";
    if(is_object($cliente)) {
        echo "É um objeto";
    }else{
        echo "Não é um objeto";
    }
    echo "<hr>";

    echo "3 - Tipos Especiais <br>";
    echo "3.1 - Tipo null: <br><br>";
    echo "Exemplo: <br>";
    $cidade = null;
    echo $cidade;
    echo "<br>";
    var_dump($cidade);
    echo "<br>";
    if(is_null($cidade)) {
        echo "É um null";
    }else{
        echo "Não é um null";
    }
    echo "<hr>";

    echo "3.2 - Tipo resource: <br><br>";
    echo "Para fazer referência a Recursos Externos<br>";
    echo "Acessar Banco de Dados<br>";
    echo "Manipulação de arquivos<br>";

    
    ?>

</body>

</html>