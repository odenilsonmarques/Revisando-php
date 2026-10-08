<html>

<head>
    <title>Tabela</title>
</head>

<body>
    <h1>Formulário de cadastro</h1>
    <form action="" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="email">Email</label><br>
        <input type="text" name="email" id="email"><br><br>

        <button>Cadastrar</button>
    </form>

    <h1>Tabela com php</h1>
    <table border="1px" width="50%">
        <tr>
            <td>Nome</td>
            <td>Email</td>
        </tr>

        <?php
        if (isset($_POST["nome"]) && isset($_POST["email"])) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];

            if ($nome == "" || $email == "") {
                echo "Por favor, preencha todos os campos";
            } else {

                echo "
            <tr>
                <td>$nome</td>
                <td>$email</td>
            </tr>
            ";
            }
        }



        ?>
    </table>
</body>

</html>