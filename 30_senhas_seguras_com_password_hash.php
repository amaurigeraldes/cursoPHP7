<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senhas seguras com password hash no PHP</title>
</head>

<body>

    <h1>Senhas seguras com password hash no PHP</h1>
    
    <?php 
    echo "<h3>Senha segura com password hash</h3>";
    # Criar uma senha:
    $senha = "123456";
    
    # Array $options (vide 3º Parâmetro)
    # Em teoria, quanto maior o 'cost' mais seguro, porém utilizará mais recursos do Hardware, sendo que o Default é 10, que é considerado um ótimo 'cost'.
    $options = [
        'cost' => 10
    ];

    echo "<p>password_hash: criptografia de mão única, hash de 60 caracteres <br></p>";
    echo "<p>Definir o tamanho do campo senha no Banco de Dados com 255 caracteres <br></p>";
    echo "Senha a ser Criptografada: " . $senha ."<br>";
    # 1º Parâmetro) é a $senha;
    # 2º Parâmetro) é o algoritmo que vai gerar o hash da $senhaSegura PASSWORD_DEFAULT;
    # 3º Parâmetro) $options que é um Array de opções (podendo ser omitido por ser Default).
    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
    echo "password_hash - Criptografia: " . $senhaSegura . "<br>";
    echo "<strong>A cada atualização, é gerado um hash diferente</strong> <br>";
    echo "<hr>";




    # Como autenticar no Servidor: 
    # Colar um hash que foi gerado entre Aspas Simples
    $senha_db = '$2y$10$.ZxUmiCQCArLro84PjJO/e9SWX/5tr1Z/ulkBFp3.SNTAERY4V4jm';

    # Fazendo a verificação da senha:
    # Supondo que o usuário digitou uma senha qualquer que seja diferente de 123456:

    $senha = "123";

    if(password_verify($senha, $senha_db)) {
        echo "Senha válida!";
    } else {
        echo "Senha inválida!";
    }
    


    ?>

</body>

</html>