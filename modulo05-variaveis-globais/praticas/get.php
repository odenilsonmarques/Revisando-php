<!-- o objetivo dessa aula é saber como o usuário consegue pegar dados da url de forma mais prática -->
<?php

// primeiro verifica se no get da url tem o nome, caso tenha é exibido
if($_GET){
    echo $_GET['nome']."<br><br>";
}


// exibindo todos os dados presente na url
var_dump($_GET);