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
        <input type="submit"   name ="submit" value=submit>
    </form>
    <?php
        #storing cookies 
        #and doing form validations 
        //first check if the submit button is clicked 
        //use the isset($_POST["name"])-> function
        $name=$passwd="";
        $cookie_name=$cookie_password="";//set the variables to null
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            //check for the button 
            if (isset($_POST["submit"])){
                echo "hello web devs";
                //check for empty inputs and validate the inputs 
                if (!empty($_POST["username"]) and !empty($_POST["password"])){
                    //validations using regular expressions 
                    if(preg_match("/^[a-z|A-Z]+/i",$_POST["username"]) and preg_match("/\w+/",$_POST["password"])){
                        //check for the length of password 
                        if(strlen($_POST["password"])>=8){
                            $name=$_POST["username"];
                            $passwd=$_POST["password"];
                            echo "we have inputs";
                            //set the cookies if all the conditions are met
                            /**
                             * cookies are often used to identify a user
                             * a small file that that the server emebeds 
                             * on the users computer
                             * A cookie iis created ising the setcookie() function
                             * we create then retrieve a cookie value 
                             * we then retrieve the value of the cookie using 
                             * the global variable $_COOKIE ..we can use the 
                             * isset() function to check if the function 
                             * is set 
                             * set the cookie with the setcookie(value,value time ...)
                             */
                            #now set the cookies
                            setcookie($name,$passwd,time()+(86400)*30);// the cookie is set
                            echo $_COOKIE[$name];
                            //retrieve the set 
                            if (!isset($_COOKIE[$name]) and !isset($_COOKIE[$passwd])){
                                echo "cookies are  not set";

                            }else{
                                echo "the cookies are set";
                            }

                        }else{
                            echo "weak password";
                        }
                    }else{
                        echo "bad match_up";
                    }

                }else{
                    echo "empty";
                }


            }else{
                echo "nothing";
            }
            
        }else{
            echo "not a post method";
        }    
    ?>
</body>
</html>