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
       When using a constant in 
       php dont use the $ sighn when 
       manipulating it 
       */
        define("PI",3.142);
        print(PI);
        echo constant("PI");
        echo PI;//SAME THING JUST AS THE PREVIOUS LINES 
    ?>
    <p>ascusd</p>
</body>
</html>
