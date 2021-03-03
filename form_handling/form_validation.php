<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
</head>
<body>
    <h1>Form validation</h1>
    <form action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <p> name<input type="text" name="name" value="name"><span>*required<?php echo $namerr;?></span> </p>
        <p> mail<input type="email" name="mail" value="mail"><span>*required<?php echo $namerr;?> </p>
        <p> commnts<input type="comment" name="comment" value="comment"> </p>
        <p> <input type="submit" name="submit" value="submit"> </p>

    </form>
    <?php
        /*
        form validation with php
        -empty string
        -validate string
        -validate email
        -validate url
        -input length
        validate->empty-theinput-format of text-

        $_SERVER["PHP_SELF] is a super global variable that returns the file name 
        of the currently executing script
        so the $_SERVER["PHP_SELF"] Sends the submitted form data to the page itself 
        insteadof jumping to a diffrent page the users error msg will appear on the same 
        form
        htmlscpecialchars()->function converts special characters HTML entities 
        this means that it will replace the HTML characters like <>
        */
        $name=$email=$comment=$namerr="";//set the variables to empty values 
        //check for empty strings validate the string 
        if(!empty($_POST["name"])){
            $name=$_POST["name"];
            $nameerr="submitted ";
           
        }else{
           echo "nothing is submitted";
        }
        /*
        in the html form we will add a little script 
        after each required field which generates the correct
        error msg if needed 
        - the next step is to validate the input data that is 
        does it contain only letters and white spaces 
        does the email contain email 
        does the website contain valid url 

        */
        //validate email
        ///VALIDATE NUMBER
        /*
        use fiter_var(variable,FILTER_VALIDATE_INT,EMAIL,URL,BOOLEAN)
        */
        if(!empty($_POST["mail"]) && filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
            $email=htmlspecialchars($_POST["mail"]);
            echo "email ok";

        }else{
            echo "no email";
        }
        //BUTTON VALIDATION
        if(isset($_POST["submit"])){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                echo "data  has been recieved ";
            }
        }else{
            echo "destroyed ";
        }
    ?>
</body>
</html>