<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia no PHP</title>
</head>

<body>

    <h1>Criptografia no PHP</h1>
    
    <?php 

    echo "<h3>Criptografias: base64, md5 e sha1</h3>";

    echo "<p>1) base64: é uma criptografia com hash de 8 caracteres, de mão dupla encode/decode <br></p>";
    $senha = "123456";
    echo "Senha a ser Criptografada: " . $senha ."<br>";
    $novaSenha = base64_encode($senha);
    echo "base64 - Criptografia: " . $novaSenha . "<br>";
    echo "Decode - Sua senha é: " . base64_decode($novaSenha);
    echo "<hr>";

    echo "<p>2) md5: criptografia de mão única, hash de 32 caracteres <br></p>";
    echo "<strong>Muito utilizada mas possui vulnerabilidades</strong> <br>";
    echo "Senha a ser Criptografada: " . $senha ."<br>";
    $novaSenha = md5($senha);
    echo "md5 - Criptografia: " . $novaSenha . "<br>";
    echo "<hr>";
    
    echo "<p>3) sha1: criptografia de mão única, hash de 40 caracteres <br></p>";
    echo "<strong>Muito utilizada mas possui vulnerabilidades</strong> <br>";
    echo "Senha a ser Criptografada: " . $senha ."<br>";
    $novaSenha = sha1($senha);
    echo "sha1 - Criptografia: " . $novaSenha . "<br>";
    echo "<hr>";

    
    ?>

</body>

</html>