<?php



//  function sum($num1, $num2)

//  {
//     return $num1 + $num2;

//  }

// echo "sum : ". sum(5,4);







// function total()
// {
//     $sum = 0;
// $marks = [10,20,30,40,50];
// for ($i = 0; $i < count($marks); $i++)
// {
    
//   $sum +=$marks[$i];
  
// }

// return $sum;
// }
// $sum =total($sum);
// echo "sum is :". total();

// function total()
// {
//     $sum = 0;
//     $marks = [10, 20, 30, 40, 50];
//     for ($i = 0; $i < count($marks); $i++) {
//         $sum += $marks[$i];
//     }
//     return $sum;
// }

// echo "sum is: " . total();



function array_sum($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}

$marks = [10, 20, 30, 40, 50];
$sum = array_sum($marks); // $sum is 150


$name = 'John';

if (isset($name)) {
    echo "The variable 'name' is set.";
} else {
    echo "The variable 'name' is not set.";
}

?>