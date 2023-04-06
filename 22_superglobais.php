<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais em PHP</title>
</head>

<body>

    <h1>Superglobais em PHP</h1>
    
    <?php 
    /*
    Superglobais são variáveis pré-definidas do PHP
    Portanto, estão sempre acessíveis independente do Escopo

    $GLOBALS: utilizada para acessar Variáveis Globais de qualquer lugar do Script PHP. Ela armazena todas as Variáveis Globais em um Array chamado $GLOBALS

    $_SERVER: Contém cabeçalhos, caminhos e locais de Script. É um Array que contém vários índices.
    
    # Utilizadas para a Coleta de Dados de Formulários:
    $_POST:
    $_GET:
    $_REQUEST:

    
    $_FILES:
    $_ENV:
    $_COOKIE:
    $_SESSION:
    */
    

    echo "01 - $ GLOBALS: utilizada para acessar Variáveis Globais <br>";
    $x = 10;
    $y = 15;

    function soma() {
        # As variáves $x e $y não estão acessíveis pois estão sendo utilizadas num Escopo Local
        // echo $x + $y; 
        echo "A soma é = " . $GLOBALS['x'] + $GLOBALS['y'] . "<br>";
    }
    soma();
    echo "<hr>";


    echo "02 - $ _SERVER: Contém cabeçalhos, caminhos e locais de Script <br>";

    # Retornará o nome do arquivo do Script que está sendo executado
    echo $_SERVER['PHP_SELF'] . "<br>";

    # Retornará o nome do Host do Servidor onde o Script está sendo executado
    echo $_SERVER['SERVER_NAME'] . "<br>";

    # Retornará o caminho absoluto do Script que está sendo executado
    echo $_SERVER['SCRIPT_FILENAME'] . "<br>";

    # Retornará o diretório raiz do Script que está em execução
    echo $_SERVER['DOCUMENT_ROOT'] . "<br>";

    # Retornará a Porta do Servidor WEB
    echo $_SERVER['SERVER_PORT'] . "<br>";

    # Retornará o Enderço IP de onde o usuário está Visualizando a Página
    echo $_SERVER['REMOTE_ADDR'] . "<br>";

    # Verificar outros Índices da $_SERVER no Manual do PHP
    echo "<hr>";




    echo "<hr>";




    ?>

</body>

</html>