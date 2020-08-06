<?php
include_once "../base.php";
foreach($_POST as $p){
    if(empty($p)){
        echo "<script>alert('不可空白');location.href='../index.php?do=reg'</script>";
        exit;
    }
}
if($_POST['pw']!=$_POST['pw2']){
    echo "<script>alert('密碼錯誤');location.href='../index.php?do=reg'</script>";
        exit;
}
$chk=$Admin->find(['acc'=>$_POST['acc']]);
if($chk){
    echo "<script>alert('帳號重複');location.href='../index.php?do=reg'</script>";
    exit;
}else{
    unset($_POST['pw2']);
    $Admin->save($_POST);
    echo "<script>alert('註冊完成，歡迎加入');location.href='../index.php?do=login'</script>";
}