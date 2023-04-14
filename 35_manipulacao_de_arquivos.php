<?php 

echo "<h1>Manipulação de Arquivos Texto no PHP</h1>";

/*
fopen()
fclose()
fwrite()
!feof()
fgets()
filesize
*/

$arquivo = '35_arquivo.txt';
$conteudo = "Conteúdo de Teste\r\n";

// Verificar as Formas para Abertura de Arquivos no Manual do PHP

# Abrindo o arquivo para Gravação
$arquivoAberto = fopen($arquivo, 'a');

# Criando a variável $tamanhoArquivo
$tamanhoArquivo = filesize($arquivo);

# Gravando o arquivo
fwrite($arquivoAberto, $conteudo);

# Fazendo a Leitura do Arquivo
# Criando um Looping para percorrer o arquivo enquanto ele não chegar até o final

# Abrindo o arquivo para Leitura
$arquivoAberto = fopen($arquivo, 'r');

while(!feof($arquivoAberto)) {
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha . "<br>";
}

# Fechando o arquivo
fclose($arquivoAberto);






