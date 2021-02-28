<?php
/*
array_chunk()->takes an array as input and splits 
that array into smaller chunks of the given size 
the las chunk may contain less number of of element size
bbased on the multilying factor of the total nnumber of 
available in the array

//array_chunk will return a multidimentional numerically indexed array 
stating with zero
*/
$input=array(1,2,3,4,5,6);
print_r(array_chunk($input,3));
#the above code will produce a multidimentional 
#array with arrays of 3 elements 