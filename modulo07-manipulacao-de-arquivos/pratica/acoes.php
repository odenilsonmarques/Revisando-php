<?php

function home(){
    include 'telas/home.php';
}

function login(){
    include 'telas/login.php';
}

function register(){
    include 'telas/register.php';
}

function listar(){
    // a funcao file, ler o arquivo csv e transforma-o em um array
    $contatos = file('dados/contatos.csv');
    include 'telas/listar.php';
}

function error404(){
    include 'telas/404.php';
}