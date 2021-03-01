<?php
$str="iam going gome";
$pattern="/[A-Z]/i";
print preg_match($pattern,$str);//returns 1 if the pattern exists 
