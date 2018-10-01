<?php
// variable variable
$name = "jakir";
$$name = 'Bari Nai';
// echo $jakir;


$hello = "Hollo ";
$bang  = "Bangladesh";
// echo "{$hello} {$bang}";
// echo "\n"; // line break in php
// echo "{$hello} {$bang}";

// Define const in php
define('PI', 3.14159);
// echo PI;

// number 

function getNumber($arr) {
    $number = $arr;
    printf('%s', $number);
}
// echo getNumber(010);

$fname = 'jakirul';
$lname = 'Islam';
// printf('The name is %2$s and %1$s', $fname, $lname);

$n = 12.453;
// printf("%.2f", $n);

$na = 123;
$ma = 23;
// printf("%05d", $na);
// printf('%05d', $ma);