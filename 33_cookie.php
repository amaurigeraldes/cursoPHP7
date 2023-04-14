<?php 

echo "<h1>Cookie no PHP</h1>";

setcookie('user', 'Amaurí Geraldes', time()+3600);
setcookie('email', 'amaurimgeraldes@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'Tênis Adidas', time()+3600);


// Para remover os Cookies, utilizar o sinal negativo no time
setcookie('user', 'Amaurí Geraldes', time()-3600);
setcookie('email', 'amaurimgeraldes@gmail.com', time()-3600);
setcookie('ultima_pesquisa', 'Tênis Adidas', time()-3600);



setcookie('user', 'Amaurí Geraldes', time()+5);
setcookie('email', 'amaurimgeraldes@gmail.com', time()+5);
setcookie('ultima_pesquisa', 'Tênis Adidas', time()+5);

var_dump($_COOKIE);

echo "<hr>";

echo $_COOKIE['email'];

?>
