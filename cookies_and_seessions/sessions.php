<?php
    /**
     * PHP SESSIONS 
     * When working with applications you open it and do 
     * some changes..this is much like a session THe computer knows who you are 
     * THe web srever does not know who you are or what you do 
     * because the HTTP address doesn't maintain state 
     * session variablessolve this problem 
     * by default session variables last till the user closes the browser 
     * the session variable holds information about one single user 
     * and are available in all pages in one application 
     * ---HOW TO START A PHP SESSION--
     *      php sessions sre started with session_start()->function 
     *      this functioon should be the first thing before any HTML tag
     *      The datawill be available in all pages  
     *  
     * 
     * when creating web sites just use one fie to start the sessions then iclude it to
     * every file that you wish to start a session insted of writing the function 
     * every time a session is started
     * 
     * 
     * a php session can bbe destroyed by using a function called unset($_SESSION["counter"]);
     * this function wil be used to end a specific variable
     *  if we are destroying all the sessions use session_destroy() 
     * 
     * turning auto session
     * you dont need to call start_session() function
     * to start session when user visists your site if you can set session.auto_start variable to 1 in php.ini file 
     * 
     * 
     */
    session_start();
    
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
        //use this when creating a login system to show that you are logged in 
        if(isset($_SESSION["counter"])){
            $_SESSION["counter"]+=1;
            echo $_SESSION["counter"],"\n";
            session_unset();//unset all the session
            session_destroy();//destroy the session
            echo $_SESSION["counter"],"\n";

        }else{
            $_SESSION["counter"]=1;
            echo $_SESSION["counter"];
        }
    ?>
    
</body>
</html>