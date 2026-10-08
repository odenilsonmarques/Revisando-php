<?php

$comida = [

    [
        'nome' => 'Pizza',
        'sabor' => 'Calabresa',
        'preco' => 30.00,
        'tamanho' => 'Grande'
    ],

    [
        'nome' => 'Hamburguer',
        'sabor' => 'Carne',
        'preco' => 20.00,
        'tamanho' => 'Médio'
    ],

    [
        'nome' => 'Sorvete',
        'sabor' => 'Chocolate',
        'preco' => 10.00,
        'tamanho' => 'Pequeno'
    ]


];

echo '<pre>';
var_dump($comida);
echo '<pre>';


?>

<h2>Cardápio</h2>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Sabor</th>
        <th>Preço</th>
        <th>Tamanho</th>
    </tr>
    <?php
     foreach($comida as $cadaComida){
        echo '<tr>';
            echo "<td>{$cadaComida['nome']}</td>";
            echo "<td>{$cadaComida['sabor']}</td>";
            echo "<td>{$cadaComida['preco']}</td>";
            echo "<td>{$cadaComida['tamanho']}</td>";
        echo '</tr>';

     }
    
    ?>
</table>