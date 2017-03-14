<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/03/2017
 * Time: 13:39
 */
include("dbConnect.php");
$firstname = $_POST["firstname"];
$lastname= $_POST["lastname"];
$superpower = $_POST["superpower"];

$sql= "INSERT INTO superheros(firstname,lastname,mainSuperpower)VALUES ('$firstname','$lastname','$superpower')";
if(mysqli_query($db,$sql)){
}
else{
    echo "Error:".$sql."<br>".mysqli_error($db);
}
header("location:index.php");