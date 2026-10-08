<?php

// declarando que essa funcão trabalha com tipagem forte, ou seja o php só vai rodar o código se o tipo de dados for realmente como declarado
declare(strict_types = 1);

function soma(float $n1, float $n2){
    return $n1 + $n2."<br>";
}

echo soma(1.1, 3);


// dessa forma vai dar um erro porque o tipo declarado foi float e não string
// echo soma('ola', 'od');