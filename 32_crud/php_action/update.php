<?php 

# Iniciando a Sessão:
session_start();

# Fazendo a Conexão:
require_once 'db_connect.php';

# Verificar se existe o índice: name="btn-editar" na Superglobal $_POST:
# Se existir é porque o Botão Editar em editar.php foi acionado
if(isset($_POST['btn-editar'])):
    # Filtrar os dados do input afim de evitar o rackeamento do BD
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    // Pegando o 'id' do campo invisível em editar.php
    $id = mysqli_escape_string($connect, $_POST['id']);

    # Atualizando os dados no Banco de Dados (exceto o id, pois é Auto Incrementado)
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    # Verificar se foi possível fazer a Query:
    if(mysqli_query($connect, $sql)):
        # Criando uma Sessão:
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        # Se conseguir atualizar, retorna para a index.php
        header('Location: ../index.php');
    else:
        # Criando uma Sessão:
        $_SESSION['mensagem'] = "Erro ao atualizar";
        # Se não conseguir atualizar, retorna para a index.php:
        header('Location: ../index.php');
    endif;
endif;
?>