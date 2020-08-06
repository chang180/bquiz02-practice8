<?php
include_once "../base.php";
$Que->save(['text'=>$_POST['text'],'parent'=>0]);
$parent=$Que->find(['text'=>$_POST['text']])['id'];
foreach($_POST['opt'] as $o){
    $Que->save(['text'=>$o,'parent'=>$parent]);
}
to("../admin.php?do=que");