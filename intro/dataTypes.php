<?php

$a = 10;

if (is_int($a)){
    echo "$a É inteiro";
}

echo "\n";

$b = 10.7;

if(is_float($b)){
    echo "$b É float";
}
echo "\n";

$c = "Texto";

if(is_string($c)){
    echo "$c É string";
}
echo "\n";

$d = false;

if(is_bool($d)){
    echo "$d É boolean";
}
echo "\n";

$f = [1, 2, 3];

print_r($f);

echo "\n";

$arr = ['Marcos', 2000, true];
print_r($arr);

$g = ['nome' => 'Marcos', 'idade' => 29];
print_r($g);

echo null;
