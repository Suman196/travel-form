<?php
$str = "This is";
echo $str;
$lenn = strlen($str);//Also sount the spaces
echo "<br> The length of string is: ". $lenn." Thank you!";//concatenation of two items (string and integer)
echo "<br> The word in the string is: ". str_word_count($str) ." Thank you!";
echo "<br> The reverese of the string is: ". strrev($str). " Thank You!";
echo "<br> Then search for  the string is: ". strpos($str, 'is'). " Thank You!";
echo "<br> Then replace  the string is: ". str_replace('is','at',$str). " Thank You!";
// echo $lenn;
?>