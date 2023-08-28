<?php

//107
// $names = ["AWS", "Heteml"];
// $file = "Server.txt";
// $handle = fopen($file, "w");
// for ($i=0; $i < count($names); $i++) {
//     fwrite($handle, $names[$i] . PHP_EOL);
// }
// fclose($handle);

//108
$file = "HELLo.txt";

//@ no-display error message
$handle = @fopen($file, "r");
if($handle === false) {
    die("cant't open file!");
}

while(($line = fgets($handle)) !== false) {
    echo $line;
}

fslose($handle);