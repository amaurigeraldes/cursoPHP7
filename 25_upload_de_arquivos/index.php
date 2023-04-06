<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer Upload de Arquivos </title>
</head>

<body>

    <h1>Fazer Upload de Arquivos </h1>
    
    <!-- Para fazer Upload: enctype="multipart/form-data" -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo" id="id_arquivo"><br><br>
        <button type="submit" name="enviar-formulario"> Enviar </button>
        <button type="reset"> Limpar </button>
    </form>





    <?php 
    // Fazer a verificação se existe o índice enviar-formulario na Superglobal POST. 
    // Se existir é porque o Botão Enviar foi "clicado"

    if(isset($_POST['enviar-formulario'])):
        
        # Criar um Array com os Formatos que serão permitidos
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        # Para pegar a extensão do arquivo selecionado:
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)):
            # Definindo onde os arquivos serão salvos
            $pasta = "arquivos/";
            # Criando um arquivo temporário
            $temporario = $_FILES['arquivo']['tmp_name'];
            # Dar um Novo Nome para o arquivo
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temporario, $pasta.$novoNome)):
                $mensagem = "Upload feito com sucesso!";
            else:
                $mensagem = "Erro! não foi possível fazer o Upload.";
            endif;
        else:
            # Mensagem de Erro para Formatos não permitidos
            $mensagem = "Formato inválido <br>";
        endif;
    
    
    echo $mensagem;

    endif;
    
    
    ?>

</body>

</html>