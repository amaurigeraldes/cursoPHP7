<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Sessões</title>
</head>

<body>

    <h1>Logout Sessões</h1>
    
    <?php 
     # Iniciar a sessão:
     session_start();

      # Limpar a sessão:
    session_unset();

     # Destruir a sessão:
     session_destroy();
    
    ?>

</body>

</html>