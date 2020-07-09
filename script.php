<?php
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome); //Informa o tipo de dado.
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            $_SESSION['mensagem-sucesso'] = "O nadador ".$nome. " compete na categoria " .$categorias[$i];
            header("location: index.php");
            return;
        }
    }

}
else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adolescente'){
            $_SESSION['mensagem-sucesso'] = "O nadador ".$nome. " compete na categoria " .$categorias[$i];
            header("location: index.php");
            return;
        }
    }
}
else{
    for($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['mensagem-sucesso'] = "O nadador " . $nome . " compete na categoria " . $categorias[$i];
            header("location: index.php");
            return;
        }
    }
}

