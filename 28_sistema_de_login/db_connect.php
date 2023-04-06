<?php 
# Conexão com Banco de Dados
# Criando as Variáveis com os dados do Banco de Dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

# Criando a Conexão com o Banco de Dados
$connect = mysqli_connect($servername, $username, $password, $db_name);

# Verificação se existe algum erro e exibir Mensagem
if(mysqli_connect_error()) {
    echo "Falha na conexão: " . mysqli_connect_error();
} 

 
?>



