<?php
include '../db.php';
$href = $_POST['href'];
$strSQL = "DELETE FROM `mainmenu` WHERE `href`='$href'"; 
$result = mysql_query($strSQL) or die(mysql_error());
?>