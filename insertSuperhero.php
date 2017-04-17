<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/03/2017
 * Time: 13:39
 */
$firstname = $_POST["fname"];
$lastname= $_POST["lname"];
$superpower = $_POST["power"];

include("dbConnect.php");


$sql = "INSERT INTO superheros(firstName,lastName,mainSuperpower)VALUES ('$firstname','$lastname','$superpower')";

if(mysqli_query($db,$sql)){

    echo "->".$superpower."->".$firstname."->".$lastname;
}

