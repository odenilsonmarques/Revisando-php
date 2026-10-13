<?php

// Verificando se a requisição foi feita utilizando o método POST.
// $_SERVER é uma variável superglobal do PHP que contém várias informações
// sobre a requisição e o servidor.
// REQUEST_METHOD informa qual método HTTP foi utilizado, como GET ou POST.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Pegando os valores enviados pelo formulário.
    // isset() verifica se o campo existe dentro de $_POST.
    // Se existir, pega o valor. Caso contrário, recebe uma string vazia.
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $altura = isset($_POST['altura']) ? $_POST['altura'] : '';

    // Verificando se todos os campos possuem algum valor, ou seja se nao está vazio
    if (!empty($nome) && !empty($sexo) && !empty($altura)) {

        if ($sexo == "masculino") {
            $pesoIdeal = (72.7 * $altura) - 58;
            echo "Oĺá, {$nome}, seu peso ideal é {$pesoIdeal}";
        } else if ($sexo == "feminino") {
            $pesoIdeal = (62.1 * $altura) - 44.7;
            echo "Oĺá, {$nome}, seu peso ideal é {$pesoIdeal}";
        } else {
            echo "Informe o tipo de sexo";
        }
    } else {

        echo "Preencha todos os campos.";
    }
}
