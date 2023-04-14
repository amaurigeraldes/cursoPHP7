<?php 
# Conexão com o Banco de Dados

# 1) Criando as Variáveis:
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

# 2) Abrindo a conexão (Procedural):
# Para projetos simples com o mysqli_connect() 
# Em projetos mais elaborados PHPOO, usaremos o pdo() que tem suporte a outros Bancos de Dados além do Mysql.
$connect = mysqli_connect($servername, $username, $password, $db_name);
# Para resolver o problema de acentuação no Banco de Dados
mysqli_set_charset($connect, "utf8");


# 3) Testando se tem erros:
if(mysqli_connect_error()) {
    echo "Erro na conexão: " . mysqli_connect_error();
}


?>