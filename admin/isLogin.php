<?php
include 'adminLogAndPass.php';

$adminLogMd5 = md5($adminLogin);
$adminPassMd5 = md5($adminPass);

    if($_COOKIE['login']==$adminLogMd5&&$_COOKIE['password']==$adminPassMd5){
        $isLogin=1;
    } else {
        $isLogin=0;
    }

if($isLogin==0){
    echo '<script>window.location.href="login";</script>';
}
?>