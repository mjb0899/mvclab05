<!DOCTYPE html>
<html>
<head>
    <title>Insert Superhero</title>
</head>
<body>
<header>
    <h1>The superhero system</h1>
    <h2>Record a Battle</h2>
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
if(isset($_GET['id'])) {
    $superheroID = $_GET['id'];
    $sql_query = "Select * from superherobattles where superheroID='$superheroID'";
}
else{
    $sql_query="select * from superherobattles";
}
$result =  $db->query($sql_query);
while($row = $result->fetch_array()){
    $firstname = $row['firstName'];
    $lastname = $row['lastName'];
    $mainSuperpower= $row['mainSuperpower'];
    $villanFought=$row['villanFought'];
    echo "<article>
                <p>The superhero known as <strong>{$firstname}{$lastnme}</strong> recently fought<strong>{$villanFought}</strong> using 
                <strong> {$mainSuperpower}     </strong></p>
            </article>";

}


?>
</main>
</body>
</html>
