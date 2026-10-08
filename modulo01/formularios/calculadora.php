<!-- 
action="" significa que, ao enviar, ele recarrega na mesma página.
method="post" define que os dados serão enviados via método POST (não aparecem na URL). -->
<form action="" method="post">
    <fieldset>
        <legend>Calculadora</legend>

        <label for="n1">Primeiro numero</label>
        <input type="text" name="n1"/><br><br>

        <label for="n2">Segundo numero</label>
        <input type="text" name="n2"/><br><br>

        <!-- Cada <button> tem um name, que será enviado junto no POST. -->
        <!-- Exemplo: se o usuário clicar no botão “Somar”, então $_POST['soma'] vai existir. -->
        <button name="soma">Somar</button>
        <button name="subtrair">subtrair</button>
        <button name="multiplicacao">Multiplicação</button>
        <button name="divisao">Divisão</button>
    </fieldset>
</form>

<?php
 
// verifica se houve o envio do formulário do tipo POST
// $_POST é um array associativo que contém os dados enviados pelo método POST declarado no formulario
if($_POST){
    //verifica se o botao com o name soma foi 
    
    // A função isset verifica duas coisas ao mesmo tempo
    // 1º Se a variável está declarada (ou seja, se existe) nesse xaso retorno true
    // 2º Se o valor não é  ou se nao foi declarado, nesse caso retorno false
    

    // aqui estamos verificando se a chave soma existe no array $_POST
    if(isset($_POST["soma"])){
        echo "Resultado:". $_POST["n1"] + $_POST["n2"];
    }

    if(isset($_POST["subtrair"])){
        echo "Resultado:".$_POST["n1"] - $_POST["n2"];
    }

    if(isset($_POST["multiplicacao"])){
        echo "Resultado:".$_POST["n1"] * $_POST["n2"];
    }
    if(isset($_POST["divisao"])){
        echo "Resultado:".$_POST["n1"] / $_POST["n2"];
    }
}