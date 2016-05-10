<?php
include '../db.php';
$id = $_POST['id'];
$title = $_POST['title'];
$shortText = $_POST['shortText'];
$mainText = $_POST['mainText'];
$strSQL = "UPDATE articles SET `mainText`='$mainText', `shortText`='$shortText', `title`='$title' WHERE `id`='$id'"; 
$result = mysql_query($strSQL) or die(mysql_error());
?>