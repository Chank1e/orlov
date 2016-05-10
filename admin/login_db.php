<?php
include 'adminLogAndPass.php';
$adminLogMd5 = md5($adminLogin);
$adminPassMd5 = md5($adminPass);
if(md5($_POST['login'])==$adminLogMd5&&md5($_POST['password'])==$adminPassMd5){
    setcookie("login",$adminLogMd5);
    setcookie("password",$adminPassMd5);
    $a=1;
    } else {
        $a=0;
    }
echo $a;
?>