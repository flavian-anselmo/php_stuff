<?php
/*
array_change_case()->changes the case of all keys 
of the passed array and returns an array with all keys 
in lower or uppercase
-NOTE--You cant pass a php string for example
$input="this is a string";

*/
$input=array("first"=>10,"second"=>400,"third"=>800);
print_r(array_change_key_case($input,CASE_UPPER));
print_r(array_change_key_case($input,CASE_LOWER));
