<!-- o objetivo dessa aula é identificar a quantidade de informações que essa superGlobal carrega -->
<?php

echo
'<pre>';
var_dump($_SERVER);
'</pre>';

if ($_SERVER['REQUEST_URI'] == '/pratica03.php') {
    echo 'ok';
} else {
    echo 'tente novamente';
}
