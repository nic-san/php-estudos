<?php

$media = 7;
$media_recu = 5;
$frequencia = 70;

$media_alu = 7;
$frequencia_alu = 70;

$reprovado_falta = $frequencia_alu < $frequencia ? true : false;

if(!$reprovado_falta){
    if($media_alu < $media_recu){
        echo "reprovado!";
    }else if($media_alu < $media){
        echo "recuperação";
    }else{
        echo "aprovado!";
    }
}else{
    echo "reprovado por faltas!";
}
