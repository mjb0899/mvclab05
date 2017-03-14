<!DOCTYPE html>
<html>
<head>
    <title>Insert Superhero</title>
</head>
<body>
<header>
    <h1>The superhero system</h1>
    <h2>Display all superhero</h2>
    <p><a href="index.php">Return to home</a></p>
</header>
<main>


<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/03/2017
 * Time: 13:40
 */
include ("dbConnect.php");
$sql_query ="Select * from superheros";
$result = $db->query($sql_query);
while($row = $result->fetch_array()){
    $firstname= $row['firstname'];
    $lastname= $row['lastname'];
    $mainSuperpower= $row['mainSuperpower'];
    echo "<article>
            <h3>{$firstname} {$lastname}</h3>
            <p>This Superheros main power is <strong>{$mainSuperpower}</strong></p>

           </article>";

}

?>
</main>
</body>
</html>