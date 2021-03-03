<?php
//readand write to file 
$filepointer=fopen("demofile.txt","a+");
if($filepointer==false){
    print "Error when openning file";



}else{
    $f_size=filesize("demofile.txt");
    //print $f_size;
    fwrite($filepointer,"Hello, world\n");
    while(!feof($filepointer)){
         $f_read=fread($filepointer,$f_size);
         fprintf($filepointer,$f_read);
    }
   
   

    fclose($filepointer);
  
}

