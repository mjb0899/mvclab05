<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17/04/2017
 * Time: 00:33
 */
$name=$_POST['name'];
$pass=$_POST['pass'];
include("dbConnect.php");
session_start();
$_SESSION['admin']=1;
echo $name;
echo $pass;


header("refresh:5;url:ad_home.php");





