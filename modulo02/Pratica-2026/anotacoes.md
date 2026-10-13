SOBRE  O USO DE ASPAS SIMPLES E DUPLAS NO PHP
Use aspas simples para textos fixos.
Use aspas duplas quando precisar interpolar variáveis diretamente em uma string.

EXEMPLO
<?php

$nome = 'Odenilson';
$operacao = 'soma';

echo 'Calculadora PHP' . PHP_EOL;
echo "Olá, $nome!" . PHP_EOL;
echo 'Operação selecionada: ' . $operacao . PHP_EOL;



Proxima pratica iniciar de Equação