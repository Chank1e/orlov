<?php
include '../db.php';
$id = $_POST['id'];
$startSql = "SELECT * FROM `comments` WHERE `id`='$id'";
$resStart=mysql_query($startSql);
while($row=mysql_fetch_array($resStart)){
    $isAccepted = $row['accept'];
}
if($isAccepted==1){
    $strSQL = "UPDATE comments SET `accept`='0' WHERE `id`='$id'";
} else if($isAccepted==0) {
    $strSQL = "UPDATE comments SET `accept`='1' WHERE `id`='$id'";
}
$result = mysql_query($strSQL) or die(mysql_error());
?>