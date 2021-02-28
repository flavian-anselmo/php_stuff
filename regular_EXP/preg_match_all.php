<?php
$str="THe rains in SPAIN falls mainly on the plains";
// if mofier i is used a case insensitive search is done
$pattern="/ain/i";//caseinsensitive 
print preg_match_all($pattern,$str);//returns four 
//the search is done regardless of the CASE