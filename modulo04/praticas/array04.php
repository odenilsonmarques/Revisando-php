<?php
 

 $alunos = [

    [
        'Alandia kelly', 
        8
    ],
    [
        'Ana patricia', 
        9
    ],
    [
        'Bianca Maria', 
        10
    ],
    [
        'Carol Araujo', 
        7
    ]
    
 ];


//  var_dump($alunos);

 ?>
 
<h2>tabela para exibir o nome dos alunos</h2>
 <table border=1>
    <tr>
        <th>Nomes dos alunos</th>
        <th>Notas</th>
    </tr>

    <?php 
        foreach($alunos as $cadaAluno){
            echo '<tr>';
                echo "<td>{$cadaAluno[0]}</td>";
                echo "<td>{$cadaAluno[1]}</td>";
            echo '</tr>';
        }
    ?>
 </table>