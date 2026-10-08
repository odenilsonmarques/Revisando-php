<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    $nome = isset($_POST['nome']) ? ($_POST['nome']) : '';
    $altura = isset($_POST['altura']) ? ($_POST['altura']) : '';
    $sexo = isset($_POST['sexo']) ? ($_POST['sexo']) : '';

    if(!empty($nome) && !empty($altura) && !empty($sexo)){
      
        if($sexo == "masculino"){
            $pesoIdeal = (72.7 * $altura) - 58;
            echo "Oĺá, {$nome}, seu peso ideal é {$pesoIdeal}";
        }else if($sexo == "feminino"){
            $pesoIdeal = (62.1 * $altura) - 44.7;
            echo "Oĺá, {$nome}, seu peso ideal é {$pesoIdeal}";
        }else{
            echo "Informe o tipo de sexo";
        }

    }
    else{
        echo "Informe os dados";
    }
}