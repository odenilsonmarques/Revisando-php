<form method="post" action="#">
    <fieldset>
        <legend>Calculadora</legend>
        <label for="n1">Primeiro numero</label><br>
        <input type="text" name="n1"><br><br>

        <label for="n2">Segundo numero</label><br>
        <input type="text" name="n2"><br><br>

        <button name="soma">Somar</button> 
        <button name="subtracao">subtrair</button>
        <button name="multiplicacao">Multiplicar</button>
        <button name="divisao">Dividir</button><br>
    </fieldset>
<form>

<?php
    
    //verify if has a submission post type
    if($_POST){
        
        //verificando se existe um campo chamado "soma/subtraca/divisao/multiplicao" no formulário que foi enviado
        //isset(verifica se uma variável ou um índice do array foi definido)
        if(isset($_POST["soma"])){
            echo "Resultado ".$_POST["n1"] + $_POST["n2"];
        }
        
        if(isset($_POST["multiplicacao"])){
            echo "Resultado ".$_POST["n1"] * $_POST["n2"];
        }

        if(isset($_POST["subtracao"])){
            echo "Resultado ".$_POST["n1"] - $_POST["n2"];
        }

        if(isset($_POST["divisao"])){
            echo "Resultado ".$_POST["n1"] / $_POST["n2"];
        }

        
    }
?>