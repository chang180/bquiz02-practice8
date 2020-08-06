<?php
include_once "../base.php";
$count=$Que->find(['id'=>$_POST['id']]);
$count['count']++;
$Que->save($count);
$count=$Que->find(['id'=>$_POST['opt']]);
$count['count']++;
$Que->save($count);
to("../index.php?do=result&id=".$_POST['id']);