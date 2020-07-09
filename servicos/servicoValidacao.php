<?php

function validaNome(string $nome) : bool{
    if(empty($nome)){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
        return false;
    }
    else if (strlen($nome) < 3){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
        return false;
    }
    else if (strlen($nome) > 40){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres';
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool {
    if (!is_numeric($idade)){
        $_SESSION['mensagem-de-erro'] = 'Informe um número para idade';
        return false;
    }
    return true;
}

