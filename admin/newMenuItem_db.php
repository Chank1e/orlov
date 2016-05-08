<?php
include '../db.php';
$href = $_POST['href'];
$name = $_POST['name'];
$href_split = explode("/",$href);
$href = $href_split["1"];
$strSQL = "INSERT INTO mainmenu (href,name) VALUES ('$href','$name')"; 
$result = mysql_query($strSQL) or die(mysql_error());
?>