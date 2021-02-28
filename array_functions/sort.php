<?php
$input=array(4,2,3,1);
sort($input);//normal sort
arsort($input);//sort reverse but retains the indices
foreach($input as $val){
    print($val);
}
print("\n");
$input_two=array("banana","apple","mango","orange");
asort($input_two);//sorts but retains the index of each item
print_r($input_two);
