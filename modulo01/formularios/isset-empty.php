<?php

// isset()
// Checa se a variável existe e não é null.

// 🔹 empty()
// Checa se a variável está vazia (zero, string vazia, array vazio, false, null, etc).



// Exemplo 1: Variável com valor
$nome = "Odenison";

echo "<h3>Exemplo 1 - Variável com valor</h3>";
echo "isset(\$nome): " . (isset($nome) ? 'true' : 'false') . "<br>";
echo "empty(\$nome): " . (empty($nome) ? 'true' : 'false') . "<br>";

// Exemplo 2: Variável vazia
$texto = "";

echo "<h3>Exemplo 2 - Variável vazia</h3>";
echo "isset(\$texto): " . (isset($texto) ? 'true' : 'false') . "<br>";
echo "empty(\$texto): " . (empty($texto) ? 'true' : 'false') . "<br>";

// Exemplo 3: Variável zero
$numero = 0;

echo "<h3>Exemplo 3 - Variável com valor 0</h3>";
echo "isset(\$numero): " . (isset($numero) ? 'true' : 'false') . "<br>";
echo "empty(\$numero): " . (empty($numero) ? 'true' : 'false') . "<br>";

// Exemplo 4: Variável null
$nulo = null;

echo "<h3>Exemplo 4 - Variável null</h3>";
echo "isset(\$nulo): " . (isset($nulo) ? 'true' : 'false') . "<br>";
echo "empty(\$nulo): " . (empty($nulo) ? 'true' : 'false') . "<br>";

// Exemplo 5: Variável não definida
echo "<h3>Exemplo 5 - Variável não definida</h3>";
echo "isset(\$naoExiste): " . (isset($naoExiste) ? 'true' : 'false') . "<br>";
echo "empty(\$naoExiste): " . (empty($naoExiste) ? 'true' : 'false') . "<br>";
