<?php
// Array associativo ou dicionario de dados. Associando uma chave ao seu valor

$a1 = [
    'nome' => 'Odenilson',
    'cidade' => 'S j de Ribamar',
    'telefone' => '98 98106-1009',
    'idade' => 37,
    'ano_formacao' => '2002',
    'cor_preferida' => 'Azul',
    'notas' => [
        9,
        8,
        7.3,
        5
    ]
];

$a2 = [
    'nome' => 'Bianca',
    'cidade' => 'Sao luis',
    'telefone' => '98 98150 - 4979',
    'idade' => 33,
    'ano_formacao' => '2001',
    'cor_preferida' => 'Branco',
    'notas' => [
        8,
        10,
        9,
        5
    ]
];


$dados = [
    $a1, $a2
];

// echo
// '<pre>';
//     var_dump($dados);
// '</pre>';

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Telefone</th>
    </tr>
    <tbody>

        <?php
            foreach ($dados as $dado){
                echo '<tr>';
                    echo "<td>{$dado['nome']}</td>";
                    echo "<td>{$dado['cidade']}</td>";
                    echo "<td>{$dado['telefone']}</td>";
                echo '</tr>';

            }
        ?>

    </tbody>
</table>
