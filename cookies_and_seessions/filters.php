<?php
    /**php 
     * php filters are used to validateand sanitise external nputs 
     * php filterextension has many of functions needed for checking user 
     * inputs and is desighned to make data validation easier 
     * filter_list()-> an be  used too list the capabilities of filter 
     *  filter_var()->used to sanitize ana validate data 
     * filter_var(variable,type_of_check_to_use)
     * 
     * 
     * 
     */
    #foreach (filter_list() as $id){
     #   print $id;//display what filter_var() can do
      #  print "\n";
    #}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //sanitize string 
        $str="hello world";
        $newstr=filter_var($str,FILTER_SANITIZE_STRING);
        if(!$newstr){
            echo "not sanitised";
        }else{
            echo "sanitised";
            print $newstr;
        }
        $int=100;
        if(!filter_var($int,FILTER_VALIDATE_INT)){
            echo "invalid";

        }else{
            echo "valid";
        }
        //vaidate values with a range 
        $int = 122;
        $min=1;
        $max=200;
        
    ?>
</body>
</html>