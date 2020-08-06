<?php
include_once "../base.php";
$chk=$Admin->find(['email'=>$_GET['email']]);
if($chk){
    echo "您的密碼為：".$chk['pw'];
}else{
    echo "查無此資料";
}