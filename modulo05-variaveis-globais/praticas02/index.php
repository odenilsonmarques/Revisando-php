<?php



include 'telas/header.php';
include 'telas/menu.php';

//capturando a raiz do projeto, através da variavel $s_server
$url = $_SERVER['REQUEST_URI'];

// quando for passado na url a raiz do site por exemplo (localhost:8000), é exibido a pagina home
if($url === '/'){

    include 'telas/home.php';
    
}else if($url === '/login'){
   
    include 'telas/login.php';

}else if($url === '/register'){
    
    include 'telas/register.php';

}else{
    include 'telas/404.php';
}

include 'telas/footer.php';



