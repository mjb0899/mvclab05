<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17/04/2017
 * Time: 00:33
 */
$name=$_POST['name'];
$name2=$_POST['name2'];
$name3=$_POST['name3'];
include("dbConnect.php");

$sql = "INSERT INTO superheros(firstName,lastName,mainSuperpower)VALUES ('$name','$name2','$name3')";

if(mysqli_query($db,$sql)){
    echo 0;
}


