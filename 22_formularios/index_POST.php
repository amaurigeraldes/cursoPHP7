<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

    <h1>Tela de Cadastro de Clientes</h1>

    <!-- No Método POST os dados do formulário serão enviados para o Script dados.php de forma invisível-->
    <form action="dados_POST.php" method="post">
    Nome: <input type="text" name="nome" id="id_nome"><br>
    E-mail: <input type="email" name="email" id="id_email"><br>
    <button type="submit">Enviar</button><br>
    <button type="reset">Limpar</button><br>
    </form>

    

</body>

</html>