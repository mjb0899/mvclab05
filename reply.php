<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17/04/2017
 * Time: 00:33
 */
$name=$_POST['name'];
$san= mysqli_real_escape_string($db,$_POST['name']);
echo $san;





