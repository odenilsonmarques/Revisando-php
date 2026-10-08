<?php

declare(strict_types=1);

// declarando uma funcao tipada do tipo array
function mostrarNomes(array $nomes){
    foreach($nomes as $cadaNome){
        echo "Nome {$cadaNome}<br>";
    }
}

// passando um array, porque a declaracao foi do tipo array
mostrarNomes(['ode','bia']);