<?php

$url = $_SERVER['REQUEST_URI'];

include 'header.php';
include 'telas/menu.php';
include 'acoes.php';

match($url){
    '/' => home(),
    '/login' => login(),
    '/register' => register(),
    '/listar' => listar(),
    default => error(),

};



include 'footer.php';