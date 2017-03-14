<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/03/2017
 * Time: 14:49
 */
include ("dbConnect.php");
$superheroID= $_POST["superheroID"];
$villan=$_POST["villan"];
$sql = "Insert into battles (superheroID,villanFought) VALUES ('$superheroID','$villanFought')";
if(mysqli_query($db,$sql)){

}else{
    echo "Error:".$sql."<br>".mysqli_error($db);
}
header("location:index.php");