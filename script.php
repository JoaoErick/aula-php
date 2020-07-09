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

if(empty($nome)){
   $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
   header('location: index.php');
}
else if (strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
    header('location: index.php');
}
else if (strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres';
    header('location: index.php');
}
else if (!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade';
    header('location: index.php');
}


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

