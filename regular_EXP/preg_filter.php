<?php
$input=[
    "It is 5 o'clock",
    "40 days",
    "No numbers here",
    "In the year 2000"
];
$result=preg_filter('/[[:digit:]]+/','($0)',$input);
foreach($result as $value){
    print $value;
    print "\n";
}
//filters the array according to the pattern used
