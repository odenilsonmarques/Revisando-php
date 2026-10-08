<?php

$nome = "Odenilson";
$idade = 40;
$cidade = "Paço do lumiar";

// Exemplo 1
echo "Eu, ".$nome.", tenho ".$idade." e moro em ".$cidade."<br>";

//exemplo 2. Usando template String. Nesse caso só funciona com aspas duplas
echo "Eu, {$nome}, tenho {$idade} e moro em {$cidade}";