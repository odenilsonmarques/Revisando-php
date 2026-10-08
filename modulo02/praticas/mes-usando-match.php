

<?php

$mes = 3;
echo match ($mes) {
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    default => 'mês inválido'
};
