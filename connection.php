<?php

echo "Connection to database <br>";


$servername = 'localhost';
$username = 'root';
$password = '';



$conn = mysqli_connect($servername,$username,$password);


if(!$conn)
{
    die('sorry the access is denied '. mysqli_connect_error());
}
else 
{
    echo 'connection s successfull !';
}



?>