<?php

$names = ["Andy","Betty","Calol"];

//42
// var_dump($names);

//43
// $count = count($names);
// echo $count;

//44
$names[] = "Ruby";
$names[0] = "R";
$names[1] = "Python";
$names[2] = "C++";
var_dump($names);


array_splice($names, 0, 2);
var_dump($names);

//52
