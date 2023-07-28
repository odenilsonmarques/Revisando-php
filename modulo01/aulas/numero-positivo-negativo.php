<form method="post" action="">
    <fieldset>
        <legend>Verificador de numero positivo e negativo</legend>
   
        <label for="numero">Informe um número</label><br>
        <input type="number" name="numero" placeholder="informe um numero"><br><br>

        <button>Verificar</button>
    </fieldset>
</form>

<?php

//verify if has a submission of post type
if($_POST){
    
    if($_POST["numero"] == null){ 
        echo "Nenhum número informado";
        die();
    }
    if(isset($_POST["numero"]) && $_POST["numero"] < 0){
        echo "Número negativo ". $_POST["numero"];
    }else{
        echo "Número positivo ". $_POST["numero"];
    }

    // var_dump ($_POST);
}


?>