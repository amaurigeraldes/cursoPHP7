<?php 

echo "<h1>Trabalhando com Datas no PHP</h1>";

echo "Para mostrar o dia: <br>";
echo "date('d'); => " . date('d');
echo "<br>";
echo "date('D'); => " . date('D');
echo "<hr>";

echo "Para mostrar o dia da semana: <br>";
echo "date('l'); => " . date('l');
echo "<hr>";

echo "Para mostrar o mês: <br>";
echo "date('m'); => " . date('m');
echo "<br>";
echo "date('M'); => " . date('M');
echo "<hr>";

echo "Para mostrar o ano: <br>";
echo "date('y'); => " . date('y');
echo "<br>";
echo "date('Y'); => " . date('Y');
echo "<hr>";

echo "Para mostrar a data: <br>";
echo "date('d/m/Y'); => " . date('d/m/Y');
echo "<br>";
echo "date('d/m/Y', time()); => " . date('d/m/Y', time());
echo "<hr>";

echo "Para mostrar a data e a hora: <br>";
echo "date('d/m/Y H:i:s A'); => " . date('d/m/Y H:i:s A');
echo "<hr>";

echo "Para ajustar a Time Zone: <br>";
echo "date_default_timezone_set('America/Sao_Paulo'); => " . date_default_timezone_set('America/Sao_Paulo');
echo "<br>";
echo "Para mostrar a data e a hora: <br>";
echo "date('d/m/Y H:i:s A'); => " . date('d/m/Y H:i:s A');
echo "<hr>";

echo "Para armazenar data no Servidor: <br>";
echo "date('Y-m-d'); => " . date('Y-m-d');
echo "<hr>";

echo "Para armazenar data e hora no Servidor: <br>";
echo "date('Y-m-d H:i:s'); => " . date('Y-m-d H:i:s');
echo "<hr>";

echo "Para formatar data e hora de Pagamento: <br>";
echo "date('d/m/Y - H:i:s', mktime(15, 30, 00, 10, 15, 23)); => " . date('d/m/Y - H:i:s', mktime(15, 30, 00, 10, 15, 23));
echo "<hr>";

echo "Para converter a data e hora do Servidor: <br>";
$data = '2019-04-10 13:30:00';
echo $data;
echo "<br>";
echo "date('d/m/Y H:i', strtotime('2019-04-10 13:30:00')); => " . date('d/m/Y H:i', strtotime('2019-04-10 13:30:00'));
echo "<hr>";