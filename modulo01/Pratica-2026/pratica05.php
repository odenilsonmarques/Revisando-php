<form method="post" action="">
    <label for="valor">Digite o valor</label><br>
    <input type="text" name="valor"><br><br>

    <button>Calcular novo salario</button>
</form>

<?php
// 1º verify if has a submission of post type
// 2º Pegue o valor enviado pelo formulário cujo campo se chama novo-salario
// 3º isset() é uma função do PHP usada para verificar se uma variável ou índice existe e não possui o valor null.
// 4º o indice novo-salario existe dentro de $_POST e não é null?
if($_POST){
    
    if($_POST["valor"]  == null){
        echo"Nenhum valor informado";
        die();
    }

    if(isset($_POST["valor"]) && $_POST["valor"] <= 510){
        echo "o novo salario é R$ ".($_POST["valor"] * 0.2) + ($_POST["valor"]);
    }else{
        echo "o novo salario é R$ ".($_POST["valor"] * 0.1) + ($_POST["valor"]);
    }

    var_dump($_POST);
}