<?php
$input=array("apple","banana","orange");
print(array_pop($input));
print("\n");
print(array_pop($input));
print("\n");
foreach($input as $value){
    print($value);
    print("\n");
}