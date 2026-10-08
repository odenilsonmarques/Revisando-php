<form method="post" action="">
    <label for="numero">Informe um número</label><br>
    <input type="text" name="numero"><br><br>
    <button>Verificar numero</button>
</form>

<?php

if($_POST){

    if($_POST["numero"] == null){
        echo "Nenhum numero informado";
        die();
    }

    if(isset($_POST["numero"]) && $_POST["numero"] >= 0){
        echo "Numero positivo ".$_POST["numero"];
    }else{
        echo "Numero negativo ".$_POST["numero"];
    }

}