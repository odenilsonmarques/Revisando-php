<!-- o objetivo dessa aula é pegar dados que são enviados no corpo da página -->


<form action="" method="post">
    <input type="text" name="nome" placeholder="Digite aqui">

    <button>Enviar</button>
</form>

<?php

if($_POST){
    echo $_POST['nome'];
}
