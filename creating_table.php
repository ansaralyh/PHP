<?php
echo "Connection to database <br>";

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
//create table in table using php
$sql = 'CREATE TABLE `php_trip1` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL , `saddress` VARCHAR(100) NOT NULL , `sclass` INT(5) NOT NULL , PRIMARY KEY (`sno`));';
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