<?php
// string and sting functions

 $name = "Ali is a good boy";
 echo strlen($name); //for length
echo "<br>";
echo str_word_count($name); // to count the  words
echo "<br>";
$fname ='ansar';
$lname =' ali';
echo $fname . $lname; // to add two strings
echo "<br>";
echo strrev($name); // to reverse the string 
echo "<br>";
echo strpos($name , 'a');  // to fin the positions of some specific thing
echo "<br>";
echo str_replace("Ali","ahmed",$name); // to replacee a certain word..
echo "<br>";
echo str_repeat($name,10 ); // to repeat the string in a single line of code 
echo "<br>";


?>