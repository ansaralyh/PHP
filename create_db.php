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
    echo 'connection is successfull !';
}
echo "<br>";
//create database

$sql = 'CREATE DATABASE ali1_db';
$result = mysqli_query($conn,$sql);

// check for the database connection
echo '<br>';

if($result)
{
    echo "The database is created successfully !";
}
else 
{
    echo "database  is not created successfully <br>" . mysqli_error($conn);
}

echo '<br>';
echo var_dump($result);

?>