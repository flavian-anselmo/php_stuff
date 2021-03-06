<?php

$n=5;
$fact=1;
function recursion($n,$fact){
    if($n>=1){
        
        $fact=$n*recursion($n-1,$fact);
        print "$fact";
    }
}