<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17/04/2017
 * Time: 00:33
 */
$name=$_POST['name'];
$pass=$_POST['pass'];
$name3=$_POST['name3'];
include("dbConnect.php");



    echo "Response:".$name."->".$pass;



