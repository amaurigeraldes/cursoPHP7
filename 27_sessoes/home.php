<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrindo a Sessão em uma Outra Página</title>
</head>

<body>

    <h1>Abrindo a Sessão em uma Outra Página</h1>
    
    <?php 
    # Iniciar a sessão:
    session_start();

    # Para chamar uma sessão que foi criada em outra página, utilizar a Superglobal $_SESSION
    echo $_SESSION['cor'] . "<br>";
    echo $_SESSION['carro'] . "<br>";
    echo session_id() . "<br>";



    ?>

</body>

</html>