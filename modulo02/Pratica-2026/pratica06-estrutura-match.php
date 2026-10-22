<?php
// match: comparação idêntica (===): compara valor e tipo.

$mes = 4;

echo match ($mes) {

    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',

    default => 'Mes inválido !'
};
