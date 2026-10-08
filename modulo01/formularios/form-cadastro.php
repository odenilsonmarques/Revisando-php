<form action="processa-formulario.php" method="POST">
    <fieldset>
        <legend>cadastro de alunos</legend>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required><br><br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Digite seu email" ><br><br>

        <label for="matricula">Matricula</label>
        <input type="text" name="matricula" id="matricula" placeholder="Digite sua matricula" required><br><br>

        <button type="submit">Enviar</button>
    </fieldset>
</form>