<?php
include_once "../base.php";
switch($_POST['type']){
    case "1":
        $Log->save(['news'=>$_POST['id'],'user'=>$_POST['user']]);
        $count=$News->find(['id'=>$_POST['id']]);
        $count['good']++;
        $News->save($count);
    break;
    case "2":
        $Log->del(['news'=>$_POST['id'],'user'=>$_POST['user']]);
        $count=$News->find(['id'=>$_POST['id']]);
        $count['good']--;
        $News->save($count);
    break;
}
