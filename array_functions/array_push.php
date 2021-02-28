<?php
//array_push
/*this functions treats array as a stack
and pushes the passed variables on to the end of the array
the parameters are{
    array required
    the variable */ 

$input=array(1=>"banana",2=>"apple",3=>"orange"); 
array_push($input,"mango");
foreach($input as $value){
    print($value);
    print("\n");
}   