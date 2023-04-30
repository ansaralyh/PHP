<?php
echo "<h2> Connection to database</h2> <br>";

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'ansar_db';

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die('sorry the access is denied '. mysqli_connect_error());
}
else 
{
    echo 'connection is successfull !';
}   
echo "<br>";
$name_db = 'hassan';
$address = 'lahore';
//create table in table using php
$sql = "INSERT INTO php_trip1 ( name, saddress,) VALUES ('$name_db', '$address')";
$result = mysqli_query($conn,$sql);

// check for the database connection
echo '<br>';

if($result)
{
    echo "The table is created successfully !";
}
else 
{
    echo "Table  is not created successfully <br>" . mysqli_error($conn);
}



?>