<?php 

# Abrindo a Sessão e verificando se existe a Sessão 'mensagem' em create.php
session_start();
if(isset($_SESSION['mensagem'])): ?> <!-- Fechando o bloco PHP -->
    <!-- # Se existir, a mensagem será exibida: -->
    <!-- echo $_SESSION['mensagem']; -->
    <!-- Mensagem movida para o JavaScript / PHP  -->

    <!-- Mesclando HTML com JavaScript e PHP -->
    <script>
    // Para a exibição da 'mensagem' numa Caixa de Alerta
        window.onload = function() {
            // Toast obtido em https://materializecss.com/toasts.html
            // M.toast({html: 'I am a toast!'});
            // Mensagem substituiu dentro do Toast 
            M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
        };
    </script>
    
<?php 
endif;

# Fazendo a limpeza da Sessão, após a exibição da mensagem 
session_unset();
?>