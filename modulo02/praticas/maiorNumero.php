<?php

$numeroUm = 5;
$numeroDois = 20;
$numeroTres = 3;

echo "Primeiro numero informado: ".$numeroUm."<br><br>";

echo "Segundo numero informado: ".$numeroDois."<br><br>";

echo "Terceiro numero informado: ".$numeroTres."<br><br>";

if($numeroUm > $numeroDois && $numeroUm > $numeroTres){
    echo "O maior numero informado é: ".$numeroUm."<br><br>";
}else if($numeroDois > $numeroTres){
    echo "O maior numero informado foi: ".$numeroDois."<br><br>";
}else{
    echo "O maior numero informado foi: ".$numeroTres."<br><br>";
} 