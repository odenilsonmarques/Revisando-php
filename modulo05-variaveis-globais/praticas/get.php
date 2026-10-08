<!-- o objetivo dessa aula é saber como o usuário consegue pegar dados da url de forma mais prática -->
<?php

// primeiro verifica se no get da url tem o nome, caso tenha é exibido
if($_GET){
    echo $_GET['nome']."<br><br>";
}


// exibindo todos os dados presente na url
echo'<pre>';
var_dump($_GET);
echo'</pre>';

// deve-se passar dessa forma no navegador
// http://localhost:8000/get.php?nome=Joao&idade=25