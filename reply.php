<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17/04/2017
 * Time: 00:33
 */
$name=$_GET['name'];
$san= mysqli_real_escape_string($db,$_GET['name']);
echo $san;





