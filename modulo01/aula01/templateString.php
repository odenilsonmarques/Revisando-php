<?php


$nome = "odenilson";
$idade = 30;
$cidade = "Ribacity";

// Exemplo 1
echo "Eu, ".$nome.", tenho ".$idade." e moro em ".$cidade."<br>";

//exemplo 2. Usando template String. Nesse caso só funciona com aspas duplas
echo "Eu, {$nome}, tenho {$idade} e moro em {$cidade}";
