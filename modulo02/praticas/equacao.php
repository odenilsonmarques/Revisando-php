<?php
/*
1º ler os tres valores dos coeficientes: a - b - c. Considere um valor diferente de zero para a
2º Calcular o valor delta e, a partir dele, calcular as raizes da equação.
3º Escrevas as raízes
*/

$a = 6;
$b = -3;
$c = 2;


$delta = ($b * $b) - (4*$a*$b);
echo "O valor de delta obtido foi: ".$delta."<br><br>";

if($delta > 0){
    //ha duas raizes reais
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "As raízes reais são x1 = " . $x1 . " e x2 = " . $x2;

}else if($delta == 0){
    //ha uma unica raiz real
    echo "Há uma raiz real única x1 = " . $x1;
}else{
   echo "Não existem raízes reais";
}



