<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17/04/2017
 * Time: 00:33
 */
$name=$_GET['ad_name'];
$pass=$_GET['ad_pass'];
include("dbConnect.php");
session_start();
$_SESSION['admin']=1;
echo $name;
echo $pass;
echo $_SESSION['admin'];


header("location: ad_homepage.html");





