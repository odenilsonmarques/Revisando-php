<?php

$a1 = [
    'nome' => 'odenilson',
    'idade' => 38,
    'email' => 'odmarquesgm@gmail.com',
    'formacao' => 'graduando em sisetma de informacao'
];

$a2 = [
    'nome' => 'Bianca',
    'idade' => 33,
    'email' => 'bia@gmail.com',
    'formacao' => 'graduando em analise de sistema'
];

$arrayMains = [
    $a1, $a2
];



echo '<pre>';
var_dump($arrayMains);
echo '</pre>';


?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Email</th>
        <th>Formação</th>
    </tr>

    <?php
         foreach($arrayMains as $arrayMain ){
            echo'<tr>';
                echo "<td>{$arrayMain['nome']}</td>";
                echo "<td>{$arrayMain['idade']}</td>";
                echo "<td>{$arrayMain['email']}</td>";
                echo "<td>{$arrayMain['formacao']}</td>";
            echo'</tr>';
         }
    ?>
   

</table>