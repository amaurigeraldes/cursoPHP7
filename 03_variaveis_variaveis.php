<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Dinâmicas</title>
</head>

<body>
    <h1>Variáveis Dinâmicas</h1>
    <?php 
    # Variáveis variáveis

    // Exemplo:
    $bebida = "refrigerante";
    $$bebida = "Guaraná";
    echo $refrigerante;
    
    echo "<hr>";

    // Outro Exemplo:
    $destino = "cidade";
    $$destino = "Ilhéus";
    echo $cidade;


    ?>

</body>

</html>