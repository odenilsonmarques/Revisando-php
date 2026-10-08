

<form action="" method="post">
    <input type="text" name="nome" placeholder="Digite o nome"><br>
    <input type="text" name="email" placeholder="Digite o email"><br>

    <button type="submit">Enviar</button>
</form>


<?php

if($_POST){
    echo $_POST['nome']."<br>"; 
    echo $_POST['email']."<br>";
}


// if($_POST){
//     echo $_POST['nome'];
// }
