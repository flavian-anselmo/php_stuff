<?php
/**
 * 
 * first specify the range of indices that you want 
 * to create  then provide the value thatyou want to fill the array with 
 * syntax :
 * array_fill(start_index,number of values,""value_to fill _the array)
 */
$fill =  array_fill(3,10,"apple");
print_r($fill);//the array is filled with the word apple 