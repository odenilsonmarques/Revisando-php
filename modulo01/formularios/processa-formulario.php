<?php

// $_SERVER['REQUEST_METHOD'] == 'POST' verifica o envio da requisição
// $_POST verifica se há dados enviados
// nesse if poderia usar apenas $_post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    // verificando se as variáveis estão definidas ou nao nulas, caso uma dessas condições sejam satisfeitas atribuir um valor, caso contrário atribui uma string vazia 
    $nome = isset($_POST['nome']) ? ($_POST['nome']) : '';
    $email = isset($_POST['email']) ? ($_POST['email']) : '';
    $matricula = isset($_POST['matricula']) ? ($_POST['matricula']) : '';


    // verificando se tenho um valor vazio traves da funçao empty(vazio), caso nao tenha exibo os dados
    if (!empty($nome) && !empty($email) && !empty($matricula)) {
        echo "Nome " . $nome . "<br>";
        echo "Email " . $email . "<br>";
        echo "Matricula " . $matricula . "<br>";
    } else {
        echo "informe os valores";
    }
}
