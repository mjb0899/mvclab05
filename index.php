<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<header>
    <h1>The superhero system</h1>
    <h2>Super hero home page</h2>

</header>
<p>What would you like to do</p>
<ul>
    <li><a href="superheroform.html">Insert superhero</a></li>
    <li><a href="displaySuperheros.php">Display all</a></li>
    <li><a href="battle.php">insert a battle</a></li>
    <li><a href="displayBattles.php">display all battles</a></li>
</ul>
<?php
include("dbConnect.php");
$sql_query = "Select * from superheros";
$result = $db -> query($sql_query);
while($row = $result -> fetch_array()){
    $firstname= $row['firstName'];
    $lastname= $row['lastName'];
    $id = $row['superheroID'];
    echo "<li><a href='displayBattles.php?id={$id}'>Battles for {$firstname}{lastname}</a></li>";
}
?>
</body>
</html>