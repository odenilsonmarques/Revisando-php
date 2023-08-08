<html>
    <head>
        <title>tabela</title>
    </head>
   

    <body>
       <h1>Formulário de cadastro</h1>
        <form method="post" action="">
            <label for="nome">Nome: </label><br>
            <input type="text" name="nome" placeholder="Digite o nome"><br><br>

            <label for="email">Email</label><br>
            <input type="text" name="email" placeholder="Digite o email"><br><br>

            <button>Cadastrar</button>
        </form>

        <h1>Tabela com PHP</h1>
        <table width="50%" border="1px"> 
            <tr>
                <td>Nome</td>
                <td>Email</td>
            </tr>

            <?php
               if(isset($_POST['nome']) and isset($_POST['email'])){
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];

                    echo"
                        <tr>
                            <td>$nome</td>
                            <td>$email</td>
                        </tr>"; 
               }
            ?>
        </table>
    </body>
</html>







