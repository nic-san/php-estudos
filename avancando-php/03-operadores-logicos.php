<?php

$media = 7;
$frequencia = 75;

$media_aluno = 5;
$frequencia_aluno = 50;

if($media_aluno >= $media && $frequencia_aluno >= $frequencia){
    echo "aluno passou!";
}else{
    echo "aluno reprovou!";
} 
echo "\n";
$media_aluno = 8;
$frequencia_aluno = 50;

if ($media_aluno >= $media || $frequencia_aluno >= $frequencia){
    echo "aluno passou!";
}else{
    echo "aluno reprovou!";
}
echo "\n";
$media_aluno = 9;
$frequencia_aluno = 98;

if ($media_aluno < $media && $frequencia_aluno < $frequencia){
    echo "aluno reprovou!";
}else{
    echo "aluno passou!";
}
