<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer Upload de Arquivos Múltiplos</title>
</head>

<body>

    <h1>Fazer Upload de Arquivos Múltiplos</h1>
    
    <!-- Para fazer Upload: enctype="multipart/form-data" -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <!-- Para selecionar múltiplos arquivos, ajustar o parâmetro: name="arquivo[]" indicando um Array para o arquivo; e incluir o parâmetro: multiple  -->
        <input type="file" name="arquivo[]" id="id_arquivo" multiple><br><br>
        <button type="submit" name="enviar-formulario"> Enviar </button>
        <button type="reset"> Limpar </button>
    </form>





    <?php 
    // Fazer a verificação se existe o índice enviar-formulario na Superglobal POST. 
    // Se existir é porque o Botão Enviar foi "clicado"

    if(isset($_POST['enviar-formulario'])):
        
        # Criar um Array com os Formatos que serão permitidos
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        
        # Para Upload de Múltiplos Arquivos criar as Variáveis $qtdeArqs e $contador; Criar também um Looping While:
        $qtdeArqs = count($_FILES['arquivo']['name']);
        $contador = 0;
        while ($contador < $qtdeArqs):

            # Para pegar a extensão do arquivo selecionado:
            # Para Upload de Múltiplos Arquivos incluir o índice [$contador]
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

            if(in_array($extensao, $formatosPermitidos)):
                # Definindo onde os arquivos serão salvos
                $pasta = "arquivos/";
                # Criando um arquivo temporário
                # Para Upload de Múltiplos Arquivos incluir o índice [$contador]
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                # Dar um Novo Nome para o arquivo
                $novoNome = uniqid().".$extensao";

                if(move_uploaded_file($temporario, $pasta.$novoNome)):
                    // $mensagem = "Upload feito com sucesso!";
                    # Mensagem trocada para Upload de Múltiplos Arquivos
                    echo "Upload feito com sucesso para $pasta$novoNome <br>";
                else:
                    // $mensagem = "Erro! não foi possível fazer o Upload.";
                    # Mensagem trocada para Upload de Múltiplos Arquivos
                    echo "Erro ao enviar o arquivo $temporario <br>";
                endif;
            else:
                # Mensagem de Erro para Formatos não permitidos
                // $mensagem = "Formato inválido <br>";
                # Mensagem trocada para Upload de Múltiplos Arquivos
                    echo "$extensao não é permitida <br>";
            endif;
        
        
            // echo $mensagem;
            # Mensagem excluída para Upload de Múltiplos Arquivos
        
        # Fazendo o incremento do contador para evitar um Looping Infinito
        $contador++;
        endwhile;


    endif;
    
    
    ?>

</body>

</html>