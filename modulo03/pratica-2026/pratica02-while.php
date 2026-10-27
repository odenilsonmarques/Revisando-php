<select name="ano">
    <option value="">Selecione o ano</option>
    <?php
    $ano = 2026;

    while ($ano >= 2000) {
        echo "<option>{$ano}</option>";
        $ano--;
    }
    ?>
</select><br><br>


<select name="dia">
    <option valu="">Selecione o dia</option>
    <?php
    $dia = 1;
    while ($dia <= 31) {
        echo "<option>{$dia}</option>";
        $dia++;
    }
    ?>
</select><br><br>

<select name="mes">
    <option value="">Selecione o mes</option>
    <?php
    $mes = 1;

    while ($mes <= 12) {
        echo "<option>{$mes}</option>";
        $mes++;
    }
    ?>
</select>