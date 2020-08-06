<?php
include_once "../base.php";
$chkacc=$Admin->count(['acc'=>$_POST['acc']]);
if($chkacc==0){
    echo "<script>alert('查無帳號');location.href='../index.php?do=login'</script>";
    exit;
}else{
    $chk=$Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
    if($chk==0){
        echo  "<script>alert('密碼錯誤');location.href='../index.php?do=login'</script>";
        exit;
    }else{
        $_SESSION['login']=$_POST['acc'];
        to("../index.php");
    }
}
