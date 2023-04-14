<?php
# Fazendo a Conexão:
include_once 'php_action/db_connect.php';
# Header
include_once 'includes/header.php';
# Message
include_once 'includes/message.php';
?>

<div class="row">
    <!-- class="col s12 m6 push-m3" -->
    <div class="col s12 m8 push-m2">
        <h3 class="light"> Clientes </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>E-mail:</th>
                    <th>Idade:</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                # Buscando todos os registros da tabela clientes no Banco de Dados crud
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):

                # Percorrendo a tabela clientes e armazenando no Array $dados
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                    <tr>
                        <!-- Exibindo os Dados existentes na Tabela Clientes -->
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        
                        <!-- Incluindo o Botão Editar -->
                        <!-- Script p/ Atualização dos Dados dentro do href="" -->
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        
                        <!-- Incluindo o Botão Remover -->
                        <!-- id da estrutura modal: em href="" e em class incluir modal-trigger -->
                        <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
                        <!-- Obtido em https://materializecss.com/modals.html -->
                        <!-- Ajustando os parâmetros em id="" -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                            <!-- Mensagens de Alerta -->
                            <h4>Opa!</h4>
                            <p>Tem certeza que deseja excluir o registro desse cliente?</p>
                            </div>
                            <div class="modal-footer">
                            
                            <!-- Criando o Botão para a Exclusão do Registro -->
                            <form action="php_action/delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

                            <!-- Alterado para Cancelar -->
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>

                            </div>
                        </div>
                    </tr>
                <?php 
                endwhile;
                else: ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php 
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <!-- Incluindo o Botão Adicionar Cliente -->
        <!-- Criando o link ao Botão: href="adicionar.php" -->
        <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>


<?php 
# Footer
include_once 'includes/footer.php';
?>





      