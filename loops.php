<?php
/*
for
while
do..while
foreach
*/
for($i=0;$i<5;$i++){
    echo $i;
    if($i=3){
        break;
    }
}
//usng for each loop
$array=array(1,2,3,4,5,6);
foreach($array as $value){
    if($value==4){
        continue;
        //the loop will skip 4

    }
    echo $value;
}