<?php

$frutas = [

    'Laranja',
    'Banana',
    'Abacaxi',
    'Laranja',
    'mamão'
];


echo '<ul>';
    
    foreach($frutas as $cadaFruta){
        echo"<li>{$cadaFruta}</li>";
    }

echo '</ul>';
   

