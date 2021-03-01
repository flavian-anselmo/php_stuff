<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-FORM-HANDLING</title>
</head>
<body>
    <form action="post.php" method="post">
        <p>name <input type="text" name="name" value=""></p>
        <p> country <input type="text" name="country" value=""> </p>
        <input type="submit" value="submit" name="submit">
    </form>
    <form action="post.php" method="GET">
        <p>name <input type="text" name="name" value=""></p>
        <p> country <input type="text" name="country" value=""> </p>
        <input type="submit" value="submit" name="submit">
    </form> 
</body>
</html>