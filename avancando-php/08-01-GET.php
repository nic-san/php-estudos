<?php

/* echo $_GET['planeta'];
echo "<br>";
echo $_GET['satelites']; 

?planeta=terra&satelites=lua = query string */

$planeta = isset($_GET['planeta']) ? $_GET['planeta']:false;

if($planeta != false){
    echo $planeta . "<br>";
}else{
    echo "Planeta não informado!";
}

// $satelite = $_GET['satelite'] ?? "Satélite não informado!";
// echo "<br>";
// echo $satelite;

//colesce