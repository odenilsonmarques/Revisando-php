<?php

declare(strict_types = 1);

function nomes(array $nomes):void
{
    foreach($nomes as $nome)
    {
        echo "Nome: {$nome}<br>";
    }
}

nomes(['Feliphe', 'João', 'Maria']);