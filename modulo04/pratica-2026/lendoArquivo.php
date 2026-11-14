<?php
// Caminho do arquivo JSON
$jsonFile = '/home/odenilson/Projetos/Revisando-php/dispositivos.json';

// Carrega o conteúdo do arquivo
$jsonData = file_get_contents($jsonFile);

// Converte para um array associativo
$data = json_decode($jsonData, true);

// Acessa a lista de dispositivos
$acessaDispositivos = $data['dispositivos'];

echo '<pre>';
var_dump($acessaDispositivos);
echo '</pre>';

?>

<table border="1">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Marca</th>
        <th>Preço</th>
    </tr>
    <?php foreach($acessaDispositivos as $dispositivo): ?>
        <tr>
        <td><?= $dispositivo['id']?></td>
        <td><?= $dispositivo['nome']?></td>
        <td><?= $dispositivo['marca']?></td>
        <td><?= $dispositivo['preco']?></td>
        </tr>
    <?php endforeach; ?>
</table>