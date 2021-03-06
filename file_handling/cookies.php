<?php

/**
 * cookies  are text files stored on the client 
 * computer and they  are kept of use tracking
 * purpose PHP transparently supports HTTP cookies 
 * _COOKIE saves the users info in the users side eg the browsre
 * THere are three ways of identifying returning users 
 *      server script sends a set of cookie to the browser 
 *      browser stores this information on local machine for future use 
 *      the server uses the infiomation to identify the user 
 * how to set cookies 
 * how to access cookies 
 * how to delete cookies 
 * the browser can forget about the cookie after a given period 
 * of time and date 
 * the information is kept unitl a particular expiry date 
 * PHP provides setcookie()->function which can take upto six arguments
 * setcookie(name,value,expire,path,domain,security);
 */
//make some validations
$username=$password="";
if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(!empty($_POST['username']) and !empty($_POST['password'])){
            //checking if the input is empty
        
            if(strlen($_POST['password'])>=8 and preg_match('/^\w{5,}$/',$username)){
                
                $password=htmlspecialchars($_POST['password']);
                $username=htmlspecialchars($_POST['username']);
                echo "valid username and password<br>";
                setcookie("username",$username,time()+3600);//set cookies after the validation
            }else{
                echo "check the username or password";
            }    
            

        }else{
            echo "the fieds cant be empty";
        }
    }    
}else{
    echo "invalid";
}   
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
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        username:<input type="text" name="username" ><br>
        password:<input type="password" name="password">
        <input type="submit" value=submit>
    </form>
</body>
</html>