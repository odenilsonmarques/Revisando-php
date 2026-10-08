<?php

$contador = 1;

while ($contador <= 10) {

    echo "ô o pente, ô o pente, ô o pente <br>";

    $contador++;
}

?>

<select>
    <option value=""> selecione o dia da semana</option>
    <?php
          $dia = 1;

          while($dia <=7){
            echo"<option>{$dia}</option>";
            $dia ++;
          }
    ?>

</select>