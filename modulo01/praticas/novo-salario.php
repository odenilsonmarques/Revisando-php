<form method="post" action="">
    <fieldset>
        <legend>Calculador do novo salário</legend>

        <label for="novo-salario">Informe seu salário</label><br>
        <input type="text" name="novo-salario"><br><br>

        <button>Calcular</button>
    </fieldset>
</form>

<?php

// verify if has a submission of post type
if($_POST){
    
    if($_POST["novo-salario"] == null){
        echo "Nenhum valor informado";
        die();
    }   

    if(isset($_POST["novo-salario"]) && $_POST["novo-salario"] <= 510){
        echo "o novo salario é R$ ".($_POST["novo-salario"] * 0.2) + ($_POST["novo-salario"]);
    }else{
        echo "o novo salario é R$ ".($_POST["novo-salario"] * 0.1) + ($_POST["novo-salario"]);
    }

    // var_dump($_POST);
}





?>
