<?php
/*
some predefined variables in php are super 
globals which means that they are always 
accessible regardless of the scope and you 
can access them form any function class or file
The superglobals variables are{
    $GLOBALS
    $_SERVER
    $_GET
    $_POST
    $_REQUEST
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
}
//$GLOBALS
    used to access global variables form anywhere 
    in the php script and also form within functions and 
    or methods 
    php stores all global variables in an array called 
    $GLOBALS[index]->the index holds the name of the variables 
 //#_REQUEST
    Is a php super global variable which is used to collect
    data after submitting an HTML form 
 */
$x=75;
$y=80;
function addition($y,$x){
    $GLOBALS['z']=$x+$y;
    //$v=$GLOBALS['x']+$GLOBALS['y'];
}   
addition($y,$x);//function call
print $z;//this will work since it is global 
print "\n";
//print $v;//this cant work since its local to the function addition
print $_SERVER['SERVER_ADDR'];