<?php

//data types in php


// 1.Strring

$name = "Ansar";
$lname = 'Ali';
echo $name  ;
echo "<br>";
echo $lname  ;

echo "<br>";
// 2. Integers

$age = 21;

echo $age;
echo "<br>";

// 3. float

$debts = 45.5;
$pay_offs = -255;

echo $debts;
echo "<br>";
echo $pay_offs;
echo "<br>";

// 4. Boolean

$exams = true;
$result = false;

echo var_dump($exams);
echo "<br>";
echo var_dump($result);
echo "<br>";

// ARRAYS 



$candidate =array("ansar ali",21,167.9,'2nd semester');
echo var_dump($candidate);
echo "<br>"; 


echo $candidate[0];
echo "<br>";
echo $candidate[1];
echo "<br>";
echo $candidate[2];
echo "<br>";
echo $candidate[3];
echo "<br>";


?>