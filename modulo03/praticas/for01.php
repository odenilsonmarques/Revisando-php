
<select>
    <option value="">---Selecione o ano---</option>

    <?php
        for($ano = 2022; $ano >= 1900; $ano--){
            echo "<option>{$ano}</option>";
        }
    ?>
</select>

<select>
    <option value="">---Selecione o dia---</option>

    <?php
        for($dia = 1; $dia <= 31; $dia++){
            echo "<option>{$dia}</option>";
        }
    ?>
</select>

<select>
    <option value="">---selecione o mes---</option>
    
    <?php
        for($mes = 1; $mes <= 12; $mes++){
            echo "<option>{$mes}</option>";
        }
    ?>
</select>