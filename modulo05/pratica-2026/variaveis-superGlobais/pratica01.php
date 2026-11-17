<?php
// o objetivo dessa aula é cohecer a superGlobal GET e saber como o usuário consegue pegar dados da url


// Verifica se existem parâmetros na URL
if ($_GET) {
    echo $_GET['nome'] . '<br> <br>';
}

// exibindo todos os dados presente na url
echo '<pre>';
var_dump($_GET);
echo '</pre>';

// deve-se passar dessa forma no navegador
// http://localhost:8003/pratica01.php?nome=Joao&idade=25