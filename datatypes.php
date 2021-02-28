<?php
    //php datatypes
    /*
    php has 8 data types 
        integers
        doubles
        booleans
        null
        strings
        arrays
        objects
        resources
    */
    #integers
    $int_var=125;
    $another_int=1234+1234;
    print($int_var);
    #doubles
    $double_var=2.38888;
    //by default double produces values with the 
    //most minimum dedcimal paces when carrting out 
    //an operation
    print($double_var);
    #boolean
    if (true){
        print("true\n");
    }else{
        print("false\n");
    }
    #null
    //null has only one value 
    $my_var=NULL;
    print($my_var);
?>