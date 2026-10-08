<?php

declare(strict_types=1);

// declarando uma funcao tipada do tipo array. Também foi tipada o retorno
function mostrarNomes(array $nomes):void 
{
    foreach($nomes as $cadaNome){
        echo "Nome {$cadaNome}<br>";
    }
}

// passando um array, porque a declaracao foi do tipo array
mostrarNomes(['Feliphe','João']);