<?php

//capturando a raiz do projeto, através da variavel $s_server
$url = $_SERVER['REQUEST_URI'];

if($url === '/'){
    echo '<h1>Pagina inicial. Troca o if pela match</h1>';
    echo 'Para acessar login (/login) ou cadastro(/register) passe na url';
}else if($url === '/login'){
    echo $pageLogin = file_get_contents('login.php');

}else if($url == '/register'){
    echo $pageRegister = file_get_contents('register.php');

}else{
    echo '<h1>Pagina não encontrada</h1>';
}


