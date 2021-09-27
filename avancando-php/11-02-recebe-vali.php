<?php


$nome = trim($_POST['nome']);
$interesses = $_POST['interesse'] ?? null;
$mensagem = strip_tags($_POST['mensagem']);

if(empty($nome)){
    echo "Informe um nome!<br>";
}

if(is_null($interesses)){
    echo "Selecione pelo menos 1 ITEM de interesse!<br>";
}

echo $mensagem;