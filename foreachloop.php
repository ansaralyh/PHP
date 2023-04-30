<?php

echo "For each loop";
echo "<br>";
 $student = array("ansar ali",21,'2nd semester');
 for($i=0; $i < count($student); $i++)
 {
    echo $student[$i];
    echo "<br>";
 }


// with foreach loop

 foreach($student as $value)
 {
    echo "$value <br>";
 }
?>