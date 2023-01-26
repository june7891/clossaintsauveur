<?php
// $hostname = "tomajuy1987.mysql.db";
// $username = "tomajuy1987";
// $password = "Zaibaket2018";  
// $database = "tomajuy1987";

$hostname = 'localhost';
$username = 'root';
$password = "";  
$database = "clos_saint_sauveur";   
$con=mysqli_connect($hostname,$username,$password,$database);    

// Check connection  
if ($con->connect_error) { 
    die("Connection failed: " . $con->connect_error);  
}

?>   