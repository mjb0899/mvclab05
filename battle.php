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
    <form action="insertBattle.php" method="post">
        <p>Select a superhero that fought in this battle</p><select name="superheroID">
<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 14/03/2017
 * Time: 13:40
 */
include("dbConnect.php");
$sql_query ="Select * from superheros";
$result = $db->query($sql_query);
while($row = $result->fetch_array()) {
    $firstname = $row['firstName'];
    $lastname = $row['lastName'];
    $superheroID = $row['superheroID'];
    echo "<option value='{$superheroID}'>{$firstname}{$lastname}</option>";
}
?>
</select><br>
        <input type="text" name="villan" placeholder="Villan Fought" ><br>
        <input type="submit" >

</form>
</main>
</body>
</html>
