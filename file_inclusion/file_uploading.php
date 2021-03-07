<?php
    //uploading files to your website 
    /**uploading 
     * text files 
     * photos
     * pdfs 
     * etc......
     * php script can be used with a html 
     * form to allow users to upload files 
     * to the server 
     * the process of uploading files follows these steps{
     *      -the suer opens the page cantaining a html form
     *      featuring text files a browse button and a submit button
     *      -the user clicks the browse button and selects a file to upload 
     *      form the local pc
     *      -the full path to the selected file appears in the text filled then the userclick submit
     *      -the selected file is sent to temp dir on the server
     *       -
     *          
     * }
     */
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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <input type="submit" name="submit" >
    </form>    
    <?php
        //uploading file to server temp dir 
        /**the form needs the following attribute 
         * enctype="multipart/form-data"->specifies which content type
         * to use when submitting the form 
         * there is one global php variable called $_file this variable is an 
         * associate double dimension array and keeps all information  related 
         * to uploading files 
         * $_FILES["file]["tmp_name"]->temp directory
         * $_FILES["file"]["name"]->the actual name of the file
         * $_FILE["file"]["size"]-.the size in bytes 
         * $_FILE["file"]["type"]
         * $_FILE["file"]["error"]
         */
       
            /**#basename function
             * used to retyrn the base name of a file if the path 
             * of the file is provided as a parameter to the base name function
             * syntax{
             *  string basename($path,$suffix);
             * -$path->specifies the path of the file 
             * $suffix->hides the extension of the file if it ends with a suffix 
             * 
             * }
             */
            
        }

    ?>
</body>
</html>