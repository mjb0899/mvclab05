<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/04/2017
 * Time: 09:25
 */

/*
 *  Simple Rating System using CSS, JQuery, AJAX, PHP, MySQL
 *  Downloaded from Devzone.co.in
 */

include ("dbConnect.php");
$ipaddress=2;

if (isset($_POST['rate']) && !empty($_POST['rate'])) {

    $rate = $db->real_escape_string($_POST['rate']);

// check if user has already rated
    $sql = "SELECT id FROM tbl_rating WHERE user_id='" . $ipaddress . "'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        echo $row['id'];
    } else {

        $sql = "INSERT INTO tbl_rating ( rate, user_id) VALUES ('" . $rate . "', '" . $ipaddress . "'); ";
        if (mysqli_query($db, $sql)) {
            echo "0";
        }
    }
}