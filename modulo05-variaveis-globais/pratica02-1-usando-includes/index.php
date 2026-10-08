<?php

include 'parts/header.php';
include 'parts/menu.php';

$url = $_SERVER['REQUEST_URI'];

if($url === '/'){
    include 'parts/home.php';
}else if($url === '/login'){
    include 'parts/login.php';
}else if($url === '/register'){
    include 'parts/register.php';
}else{
    include 'parts/404.php';
}

include 'parts/footer.php';

?>
