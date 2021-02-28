<?php
/*
returns an array of values representing 
a single column form the input array
syntax{
    array_column(array,values);
}
*/
$records=array(
    array(
        "id"=>123,
        "f_name"=>'zara',
        "l_name"=>'ali'
    ),
    array(
        "id"=>354,
        "f_name"=>'bright',
        "l_name"=>'macd'

    ),
    array(
        "id"=>354,
        "f_name"=>'bright',
        "l_name"=>'macd'

    )
);
$get_firstname=array_column($records,'f_name','id');
print_r($get_firstname);
