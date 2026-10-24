<select name="ano">
    <option value="">Selecione um ano</option>
    <?php
    for ($ano = 2026; $ano >= 2000; $ano--) {
        echo "<option>{$ano}</option>";
    }
    ?>
</select><br><br>

<select name="dias">
    <option value="">selecione o dia</option>

    <?php
    for ($dia = 1; $dia <= 31; $dia++) {
        echo "<option>{$dia}</option>";
    }
    ?>
</select><br><br>

<select name="mes">
    <option value="mes">Selecione o mes</option>
    <?php
    for ($mes = 1; $mes<=12; $mes++) {
        echo "<option>{$mes}</option>";
    }
    ?>

</select>