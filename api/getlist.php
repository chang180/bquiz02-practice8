<?php
include_once "../base.php";
$post=$News->all(['type'=>$_GET['type']]);
foreach($post as $p){
    echo "<div onclick='getPost(".$p['id'].")'>".$p['title']."</div>";
}
