<?php 

# Iniciando a Sessão:
session_start();

# Fazendo a Conexão:
require_once 'db_connect.php';

# Verificar se existe o índice: name="btn-deletar" na Superglobal $_POST:
# Se existir é porque o Botão Deletar em delete.php foi acionado
if(isset($_POST['btn-deletar'])):
    # Filtrar os dados do input afim de evitar o rackeamento do BD
    // Pegando o 'id' do campo invisível em editar.php
    $id = mysqli_escape_string($connect, $_POST['id']);

    # Atualizando os dados no Banco de Dados (exceto o id, pois é Auto Incrementado)
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    # Verificar se foi possível fazer a Query:
    if(mysqli_query($connect, $sql)):
        # Criando uma Sessão:
        $_SESSION['mensagem'] = "Excluído com sucesso!";
        # Se conseguir atualizar, retorna para a index.php
        header('Location: ../index.php');
    else:
        # Criando uma Sessão:
        $_SESSION['mensagem'] = "Erro ao excluir";
        # Se não conseguir atualizar, retorna para a index.php:
        header('Location: ../index.php');
    endif;
endif;
?>