<?php

//102
// $str = "Hello World" . PHP_EOL;
// $file = "hello.txt";
// file_put_contents($file, $str, FILE_APPEND);

//103
// $file = "Hello.txt";
// $str =file_get_contents($file);
// echo $str;

//104 stored in array
// $file = "Hello.txt";
// $array = file($file, FILE_IGNORE_NEW_LINES);
// print_r($array);

// //105
// $dir = "hello";
// mkdir($dir);


//106
// $file = "Hello.txt";
// $handle = fopen($file, "r");

//put 1 row
// $line = fgets($handle);
// echo $line;

//puts multi rows
while(($line = fgets($handle)) !== false) {
    echo $line;
}

fclose($handle);

