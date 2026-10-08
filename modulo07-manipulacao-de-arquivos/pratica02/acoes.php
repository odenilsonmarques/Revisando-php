<?php

function home()
{
    include 'telas/home.php';
}

function login()
{
    include 'telas/login.php';
}
function register()
{
    include 'telas/register.php';
}

function listar()
{
    $contatos = file('dados/contatos.csv');
    // echo '<pre>';
    // var_dump($contatos);
    // echo '</pre>';
    include 'telas/listar.php';
}

function  error()
{
    include 'telas/404.php';
}