<form method="post" action="">
    <label for="nome">Nome</label><br>
    <input type="text" name="nome"><br>

    <label for="email">Email</label><br>
    <input type="text" name="email"><br><br>

    <button type="submit">Enviar</button><br><br>
</form>

<?php
if ($_POST) {
    // Verificar se as variáveis estão definidas e não são nulas (isset)
    $nome_isset = isset($_POST['nome']);
    $email_isset = isset($_POST['email']);

    // Verificar se as variáveis estão definidas, não são nulas e não estão vazias (!empty)
    $nome_not_empty = !empty($_POST['nome']);
    $email_not_empty = !empty($_POST['email']);

    echo "Resultado das verificações:<br>";
    echo "isset(\$_POST['nome']): " . ($nome_isset ? 'true' : 'false') . "<br>";
    echo "isset(\$_POST['email']): " . ($email_isset ? 'true' : 'false') . "<br>";
    echo "!empty(\$_POST['nome']): " . ($nome_not_empty ? 'true' : 'false') . "<br>";
    echo "!empty(\$_POST['email']): " . ($email_not_empty ? 'true' : 'false') . "<br>";
    
    // Exibir os valores enviados
    echo "<br>Valores enviados:<br>";
    echo "Nome: '" . $_POST['nome'] . "'<br>";
    echo "Email: '" . $_POST['email'] . "'<br>";
}
?>
