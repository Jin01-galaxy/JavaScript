<?php
// $countries = [
//     "Japan" => ["Tokyo", "Yokohama", "Kyoto"],
//     "England" => ["London","Glasgow"],
//     "France" => ["Paris","Marseille", "Lyon"]
// ];
// $cities = $countries["England"];
// // echo print_r($cities);
// for ($i=0; $i < count($cities); $i++) { 
//     # code...
//     echo $cities[$i] . PHP_EOL;
// }

//85
// $str = "R,Python,C++";
// $array = explode(",", $str);
// print_r($array);

//86
// $array = ["R","Python","C++"];
// $str = implode("--", $array);
// echo $str . PHP_EOL;

//87
// $colors = ["Ruby","Python","C++"];
// for ($i=0; $i < count($colors); $i++) { 
//     # code...
//     echo strtoupper($colors[$i]) . PHP_EOL;
// }

//88
// $colors = ["Ruby","Python","C++"];
// for ($i=0; $i < count($colors); $i++) { 
//     $result = substr($colors[$i], 0, 1);
//     echo $result;
// }

//89
// $str = "Hyper-Tkhi-Muybuy-LInja";
// $words = explode("-", $str);
// for ($i=0; $i < count($words); $i++) { 
//     # code...
//     echo substr($words[$i], 0, 1);
// } 


// $scores = [90,20,10];
// $total = 0;
// for ($i=0; $i < count($scores); $i++) { 
//   $total = $total + $scores[$i];
// }
// $total = array_sum($scores);
// echo $total . PHP_EOL;

//90 multibyte strings
$message = "ハローワールド";
$length = mb_strlen($message);
echo $length . PHP_EOL;
