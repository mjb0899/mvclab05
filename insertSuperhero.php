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


//$sql = "INSERT INTO superheros(firstName,lastName,mainSuperpower)VALUES ('$firstname','$lastname','$superpower')";

$sql= "select superheroID from superheros where fname='logan'";
$result =  $db->query($sql);
while($row = $result->fetch_array()){
    $id=$row['superheroID'];
}

echo "->".$superpower."->".$firstname."->".$lastname."->".$id;