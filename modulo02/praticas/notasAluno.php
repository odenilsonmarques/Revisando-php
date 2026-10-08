<?php

$n1 = 6;
$n2 = 3;
$n3 = 2;
$n4 = 9;

echo "Primeira nota do aluno: ".$n1."<br>";
echo "Segunda nota do aluno: ".$n2."<br>";
echo "Terceira nota do aluno: ".$n3."<br>";
echo "Quarta nota do aluno: ".$n4."<br><br>";

$media = ($n1+$n2+$n3+$n4)/4;

echo "A média do aluno foi de: ".$media."<br><br>";

if($media >= 7){
    echo "Aluno aprovado com média: ".$media."<br><br>";
}else{
    echo "Aluno reprovado com média: ".$media."<br><br>";
}