<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/03/2017
 * Time: 13:39
 */
include("dbConnect.php");
$firstname = $_POST["fname"];
$lastname= $_POST["lname"];
$superpower = $_POST["power"];

$sql= "INSERT INTO superheros(firstname,lastname,mainSuperpower)VALUES ('$firstname','$lastname','$superpower')";
if(mysqli_query($db,$sql)){
}
else{
    echo "Error:".$sql."<br>".mysqli_error($db);
}
echo "->".$superpower."->".$firstname."->".$lastname;