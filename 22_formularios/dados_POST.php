<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

    <h1>Cadastro de Clientes</h1>

    <?php 

    // Associando os Dados das Variáveis do Formulário
    $nome = $_POST["nome"] ?? "Sem nome";
    $email = $_POST["email"] ?? "Sem e-mail";
            
    if ($nome != "" and $email != "") {

    echo "Seu nome é $nome e o seu e-mail é $email <br>";
    // var_dump($_POST);


    } else {
        echo "Digite os seus dados corretamente!";
    }
    
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

</body>

</html>