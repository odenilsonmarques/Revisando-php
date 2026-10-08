<?php

$url = $_SERVER['REQUEST_URI'];

include 'telas/header.php';
include 'telas/menu.php';
include 'telas/actions.php';

match($url)
{
    '/' => home(),
    '/login' => login(),
    '/register' => register(),
    '/404' => notFound()
};

include 'telas/footer.php';