<?php

$ano = 1985;

while($ano <= 2025){
    echo "ano {$ano} <br>";
    $ano++;
}

?>

<select>
    <option>Selecione o dia do mes</option>
    <?php
    $diaDoMes = 1;
    while($diaDoMes <=30 ){
        echo"<option>{$diaDoMes}</option>";

        $diaDoMes++;
    }
    
    ?>
</select>