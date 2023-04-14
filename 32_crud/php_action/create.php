<?php 

# Iniciando a Sessão:
session_start();

# Fazendo a Conexão:
require_once 'db_connect.php';

# Clear para proteção contra Cross Site Scripting com funções SQL e JavaScript
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

# Verificar se existe o índice: name="btn-cadastrar" na Superglobal $_POST:
# Se existir é porque o Botão Cadastrar em adicionar.php foi acionado
if(isset($_POST['btn-cadastrar'])):
    # Filtrar os dados do input afim de evitar o rackeamento do BD
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    # Inserir os dados no Banco de Dados (exceto o id, pois é Auto Incremente)
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    # Verificar se foi possível fazer a Query:
    if(mysqli_query($connect, $sql)):
        # Criando uma Sessão:
        $_SESSION['mensagem'] = "Cadastro efetuado com sucesso!";
        # Se conseguir adicionar, retorna para a index.php
        header('Location: ../index.php');
    else:
        # Criando uma Sessão:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        # Se não conseguir adicionar, retorna para a index.php:
        header('Location: ../index.php');
    endif;
endif;
?>