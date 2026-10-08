
<div class="pt-5">
    <h1 class="pb-3">Lista de contatos</h1>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <tbody>
            <?php 
                foreach($contatos as $cadaContato){
                    $partes = explode(';', $cadaContato);
                    
                    echo'<tr>';
                        echo '<td>'.$partes[0].'</td>';
                        echo '<td>'.$partes[1].'</td>';
                        echo '<td>'.$partes[2].'</td>';
                    echo'<tr>';
                }
            ?>
        </tbody>
    </table>
</div>