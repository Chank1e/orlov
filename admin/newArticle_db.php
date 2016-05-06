<?php
include '../db.php';
$title = $_POST['title'];
$shortText = $_POST['shortText'];
$mainText = $_POST['mainText'];
$strSQL = "INSERT INTO articles (title,shortText,mainText) VALUES ('$title','$shortText','$mainText')"; 
$result = mysql_query($strSQL) or die(mysql_error());
?>