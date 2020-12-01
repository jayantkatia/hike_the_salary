<?php
    include_once("connection.php");
    if(isset($_POST['submit'])){
        $company=$_POST["company"];
        $name=$_POST["name"];
        $query = "update employees set Company='$company' where Name='$name'";
        $queryResult = mysqli_query( $dbConnection, $query );
        
        if(!mysqli_error($dbConnection)){
            $count=mysqli_affected_rows($dbConnection);
        }
        header( "Location: index.php" );
    }
?>