<?php
//array_serach
/*
search an array and returns the key of the 
specified value 
*/
$input=array("a"=>"banana","b"=>"apple","c"=>"mango");
print_r(array_search("apple",$input));//returns the key
shuffle($input);
print_r($input);