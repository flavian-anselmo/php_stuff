<?php
$input = [
    "Red",
    "Pink",
    "Green",
    "Blue",
    "Purple"
];
$results=preg_grep("/^p/i",$input,PREG_GREP_INVERT);
foreach($results as $value){
    print $value;
}
//Uing the flag PREG_GREP_INVERT will output the oposite 
