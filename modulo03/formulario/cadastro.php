<fieldset>
    <legend>Caastro de equipamentos</legend>
    <form action="processa-cadastro.php" method="post"> 
        <label for="nome">Nome do produto</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome" /><br><br>

        <label for="NumeroSerie">Numero de série</label>
        <input type="text" name="NumeroSerie" id="NumeroSerie" placeholder="Digite o número de série" /><br><br>


        <label for="AnoFabricacao">Ano de fabricação</label>
        <select name="anoFabricacao" id="anoFabricacao">
            <option>Selecione</option>
            <?php
            $ano = 2025;
            while($ano >= 2000){
                echo "<option>{$ano}</option>";
                $ano--;
            }
            ?>
        </select><br><br>

        <label for="anoValidade">Ano de validade</label>
        <select name="anoValidade" id="anoValidade">
            <option>Selecione</option>
            <?php
            for($anoValidade = 2025; $anoValidade <=2030; $anoValidade++){
                echo"<option>{$anoValidade}</option>";
            }
            ?>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</fieldset>