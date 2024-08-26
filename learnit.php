<?php
/*
// echo("Hello World\n");
// $opening = "Aloha\n";
// echo ($opening . "Gael");
*/

$count = 6;//integer
$price = 9.50;//double or float
$first_name = 'bob';//string
$first_name = "Bob";//string
$is_valid = true;//boolean

$nullVariable;
// (@) Gets rid of warning
echo @$nullVariable;

//declare a constant
define('PI', 3.14);

//ARRAY
$games = ['Animal Crossing', "Harry Potter"];
// echo($games);
// print_r($games);


// Use echo to call specific array string etc..
$student1 = [
    'name' => "Mitzy",
    'id' => 123456,
    'grade' => 'A'
 ] ;

echo($student1['name']);
print_r($student1);