<?php
// Caminho do arquivo JSON
$jsonFile = '/home/odenilson/Área de Trabalho/dispositivos/dispositivos.json';

// Carrega o conteúdo do arquivo
$jsonData = file_get_contents($jsonFile);

// Converte para um array associativo
$dispositivos = json_decode($jsonData, true);

// Exibe o array (para ver a estrutura)
echo'<pre>';
print_r($dispositivos);
echo'</pre>';
?>
