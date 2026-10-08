<?php

$url = $_SERVER['REQUEST_URI'];

include 'telas/header.php';
include 'telas/menu.php';
include 'acoes.php';

match($url){
    '/' => home(),
    '/login' => login(),
    '/register' => register(),
    '/listar' => listar(),
    default => error404(),
};


include 'telas/footer.php';