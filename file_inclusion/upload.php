<?php
//uploading the file 
function upload(){
    if(isset($_POST['submit'])){
        //get the info of the file

        $imageFile=$_FILES['image'];
        $file_name=$_FILES['image']['name']; //get the name ofthe file 
        $file_tmp=$_FILES['image']['tmp_name'];//temp location before uploading 
        $file_size=$_FILES['image']['size']; //the size in bytes 
        $file_error=$_FILES['image']['error']; //if an error occurs while uploading
        $file_type=$_FILES['image']['type']; 


        $fileExt=explode('.',$file_name);
        print_r($fileExt);
        $fileactualExt=strtolower(end($fileExt));
        print_r($fileactualExt);
        $allowed=array('jpg','jpeg','png');//this are the image types allowed
        if(in_array($fileactualExt,$allowed)){
            //check if the extension is part of the array
            #in_array(extension,array);
            if($file_error==0){
                //check for errors
                #if it is zero thenn upload esle do not 
                if($file_size<10000000000){
                    //check for file size 
                    /**some times if users upload 
                     * files with the same name and ec=xtension 
                     * one of the files will bw overwritten 
                     * therefore it is good practice to 
                     * change the file name to a new one 
                     * by giving it a unique value 
                     * 
                     * 
                     * uniqid()->function generates a uniqueid based on the 
                     * microtime (the current time in microseconds)
                     * to generate complex ids use the md5() function
                     * unidid(prefix,more_entropy)
                     */
                    $fileNewName=uniqid('',true).".".$fileactualExt;//provides a unique id as the name 
                    //give it the actual extension eg png or jpeg or jpg
                    $filedestination='uploads/'.$fileNewName;//where to upload the file 
                    move_uploaded_file($file_tmp,$filedestination);//function to upload the file 
                    /**move_uploaded_file($temporray,$destination) 
                     * if one does not want to open a new tab just use the header function
                     * header(location:success)
                    */
                    header("location:file_uploading.php?upload success");


                }else{
                    echo "your file is too large ";
                }

            }else{
                echo "there was an error uploading your file ";
            }

            
        }else{
            echo "you canot upload files of this type";
        }
        /**explode function
         * used to split a string in to diffrernt strings 
         * splits a string whenever the delimiter characteroccurs 
         * this function returns an array containing the string formed 
         * syntax:
         *      array explode(sepereator ,originalstring ,no of elements )
         * return type of explode function is array of strings 
         * input:explode(" ","GEEK FOR GEEK");
         * output:Array
         * (
         *      [0]=>geek
         *      [1]=>for
         *     [2]=>geek
         * )
         * end() function moves the internal pointer to and outputs the last element in the array 
         * current()
         * next()
         * prev()
         * reset()
         * each()
         */
    }
}
upload();//function call
