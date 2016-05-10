<?php
include 'db.php';
$comment = $_POST['comment'];
$name = $_POST['name'];
$strSQL = "INSERT INTO comments (comment,name) VALUES ('$comment','$name')"; 
$result = mysql_query($strSQL) or die(mysql_error());
?>