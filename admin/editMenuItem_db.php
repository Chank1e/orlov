<?php
include '../db.php';
$href = $_POST['href'];
$name = $_POST['name'];
$oldHref=$_POST['oldHref'];
$href_split = explode("/",$href);
$href = $href_split["1"];
$strSQL = "UPDATE mainmenu SET `name`='$name', `href`='$href' WHERE `href`='$oldHref'"; 
$result = mysql_query($strSQL) or die(mysql_error());
?>