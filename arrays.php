<?php
/*
there are three different kinds of arrays value is accesed 
using an ID WHICH IS CALLED AN ARRAY INDEX
    NUMERIC
    ASSOCIATIVE
    MULTIDUMENTIONAL

*/
#numeric arrays
$numbers=array(1,2,3,4,5);
foreach($numbers as $val){
    echo "valu=$val";
}
#associative arrays
$salary=array("name"=>"mohamed",
                    "amt"=>100
             );
#multdimensional
$marks=array(
    "moha"=>array(
        "physics"=>70,
        "endlish"=>80
    ),
    "sarah"=>array(
        "chem"=>80,
        "eng"=>70
    )
);