<?php
 
 $alunos = [

    'Alandia kelly',
    'Ana patricia',
    'Bianca Maria',
    'Carol Araujo',
    'Daniel Marciel'
 ];

//  var_dump($alunos);

 ?>
 
<h2>tabela para exibir o nome dos alunos</h2>
 <table border=1>
    <tr>
        <th>Nomes dos alunos</th>
    </tr>

    <?php 
        foreach($alunos as $cadaAluno){
            echo '<tr>';
                echo "<td>{$cadaAluno}</td>";
            echo '</tr>';
        }
    ?>
 </table>