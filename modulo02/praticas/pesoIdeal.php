<?php

$altura = 1.68;
$sexo = "M";
$nome = "Odenilson";

if($sexo == "M"){
    $pesoIdeal = (72.7*$altura) - 58;
    echo "Oĺá, {$nome}, seu peso ideal é {$pesoIdeal}";

}else if($sexo == "F"){
    $pesoIdeal = (62.1*$altura) - 44.7; 
    echo "Oĺá, {$nome}, seu peso ideal é {$pesoIdeal}";

}else{
    echo "Informe o tipo de sexo";
}
