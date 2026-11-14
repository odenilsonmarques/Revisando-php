<?php

$comida = [
    [
        'nome' => 'Pizza',
        'preco' => 25,
        'tamanho' => 'medio'
    ],

    [
        'nome' => 'Frango ao forno',
        'preco' => 30,
        'tamanho' => 'pequeno'
    ],
    [
        'nome' => 'Cozidão',
        'preco' => 40,
        'tamanho' => 'medio'
    ]
];


echo '<pre>';
var_dump($comida);
echo '</pre>';


?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Preco</th>
        <th>Tamanho</th>
    </tr>

    <?php
    foreach ($comida as $cadaComida) {
        echo '<tr>';
        echo "<td>{$cadaComida['nome']}</td>";
        echo "<td>{$cadaComida['preco']}</td>";
        echo "<td>{$cadaComida['preco']}</td>";
        echo '</tr>';
    }
    ?>

</table>