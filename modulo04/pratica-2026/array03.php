<?php

$clubeDeFutebol = [
    'America mineiro',
    'Bragantino',
    'Flamengo',
    'Palmeiras',
    'Vasco',
    'Grêmio',
    'Mac',
    'Sampaio'
];

echo '<pre>';
var_dump($clubeDeFutebol);
echo '</pre>';

// exibindo valores usando foreach
echo '<ul>';

foreach($clubeDeFutebol as $clubes){
    echo "<li>{$clubes}</li>";
}
echo '</ul>';
