<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While no PHP</title>
</head>

<body>
    
    <h1>While e Do While no PHP</h1>

    <?php 

    echo "Usando o while <br>";
    $contador = 1;

    while($contador <= 10) {
        echo "Contador é = $contador <br>";
        $contador++;
    };

    


    echo "Usando o do while <br>";
    $contador = 1;

    do {
        echo "Contador é = $contador <br>";
        $contador++;
    } while ($contador <= 10);

    

    
    ?>

</body>

</html>