<?php
include_once("connection.php");

$query="select * from employees";
$queryResult=mysqli_query($dbConnection,$query);

$arry = array();
if(!mysqli_error($dbConnection)){
    while( $row = mysqli_fetch_array( $queryResult ) ) {
        $arry[] = $row;
    }
}else{
    echo "Problem connecting with the database ....";
    die();
}

?>
