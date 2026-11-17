<!-- O objetivo dessa aula é cohecer a superGlobal POST e saber como pegar dados que são enviados no corpo da página -->

<form action="" method="post">
    <input type="text" name="nome" placeholder="digite aqui...">
    <button>Enviar</button>
</form>

<?php

if($_POST){
    echo $_POST['nome'];
}