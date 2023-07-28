<form method="post" action="">
    <label for="nome">Nome<label><br>
    <input type="text" name="nome"><br>

    <label for="email">Email<label><br>
    <input type="text" name="email"><br><br>

    <button>Enviar</button><br><br>
</form>

<?php
    // verify if has a submission of post type 
    if($_POST){
        echo "Ola: ".$_POST["nome"]."<br>";
        echo "Email: ".$_POST["email"];
    }


?>