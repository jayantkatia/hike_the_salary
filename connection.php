<?php
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "hike_the_salary";

$dbConnection=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_error($dbConnection)){
    echo "Some error occured while connecting to database...";
    die();
}

?>