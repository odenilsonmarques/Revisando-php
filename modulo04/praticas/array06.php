<?php

$cont = 0;

echo "Numero pares<br>";

for($i = 1; $i<= 100; $i++){

    if($i % 2 == 0){
        
        echo "{$i}<br>";

        $cont ++;

    }
    
}

echo "A qauntidade de numero pares é ".$cont;