<?php

//capturando a raiz do projeto, através da variavel $s_server
$url = $_SERVER['REQUEST_URI'];

include 'telas/header.php';
include 'telas/menu.php';
include 'acoes.php';

// quando for passado na url a raiz do site por exemplo (localhost:8000), é exibido a pagina home, e assim por diante. Nesse caso estamos usando funções
match ($url) {
    '/' => home(),
    '/login' => login(),
    '/register' => register(),
    '/listar' => listar(),
    default => error404(),
};

include 'telas/footer.php';