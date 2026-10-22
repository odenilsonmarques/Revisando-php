<?php
// Switch comparação não estrita (==): permite conversão de tipos em determinadas comparações.

$mes = 4;

switch ($mes) {
    case 1:
        echo 'Janeiro';
        break;
    case 2:
        echo 'Fevereiro';
        break;
    case 3:
        echo 'Março';
        break;
    case 4:
        echo 'Abril';
        break;
    default:
        echo 'Opção inválida !';
}
