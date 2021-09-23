<?php
//array chaves - 0 1 2 3 4 5 
//array - chaves e valores
$array = array(
    'nicolas' => 40,
    200,
    300,
    3000 => 1000,
    "School of net",
    true 
);

echo $array['nicolas'];
echo"\n";
echo $array[1];
echo"\n";
echo $array[3000];
echo"\n";
echo $array[0];
echo"\n";
echo var_dump($array);