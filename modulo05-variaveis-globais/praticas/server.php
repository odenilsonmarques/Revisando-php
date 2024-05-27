<!-- o objetivo dessa aula é quantidade de informação que essa variavel tras -->

<?php

echo '<pre>';
        var_dump($_SERVER);
    '</pre>';

    if($_SERVER['REQUEST_URI'] == '/server.php'){
        echo 'ok';
    }else{
        echo 'tentenovamente';
    }