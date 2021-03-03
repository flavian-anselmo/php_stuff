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
    /* 
    you can incude the content of a php file before the server 
    executes 
    thereare two php functions which can be used to include one php fiel
        include()
            -takes all the textin a specified file and copies 
            it into the file that uses the include function 
            for example you are creating a common menu 
            in a website just create one file with the menu content
            and include it
            the problem with require isthat it executes even after 
            thereis a problem with execution ..therefore use require() 

        require()
    helps in creation of functions headers footers or elements 
    thatcab be reused on multiple pages  thsis will hep developers 
    to make it easy to change the layout of complete website withh minimal 
    effort ..insteadof chaning the whole code in many files just change in one file 


    */
    include("menu.php");
    //require("menu.php");
    ?>
    <p>This is an example to show how to include php file </p>
</body>
</html>



