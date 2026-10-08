<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $nome = isset($_POST['nome'])?($_POST['nome']):'';
    $numeroSerie = isset($_POST['NumeroSerie'])?($_POST['NumeroSerie']):'';
    $anoFabricacao = isset($_POST['anoFabricacao'])?($_POST['anoFabricacao']):'';
    $anoValidade = isset($_POST['anoValidade'])?($_POST['anoValidade']):'';
    
    if (!empty($nome) && !empty($numeroSerie) && !empty($anoFabricacao) && !empty($anoValidade)) {
        echo "Nome do produto: {$nome}<br>";
        echo "Número de série: {$numeroSerie}<br>";
        echo "Ano de fabricação: {$anoFabricacao}<br>";
        echo "Ano de validade: {$anoValidade}<br>";
    } else {
        echo "Preencha todos os campos.";
    }
}
