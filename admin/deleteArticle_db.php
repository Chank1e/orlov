<?php
include '../db.php';
$id = $_POST['id'];
$strSQL = "DELETE FROM `articles` WHERE `id`='$id'"; 
$result = mysql_query($strSQL) or die(mysql_error());
?>