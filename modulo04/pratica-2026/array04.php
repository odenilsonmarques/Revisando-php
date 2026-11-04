<?php

$alunos = [
    [
        'Odenilson',
        41
    ],

    [
        'Felipe',
        30
    ],

    [
        'Marcos',
        40
    ]
];

echo '<pre>';
var_dump($alunos);
echo '</pre>';

echo '<ul>';
foreach ($alunos as $aluno) {
    echo "<li>{$aluno[0]}</li>";
    echo "<li>{$aluno[1]}</li>";
}
echo '<ul>';
