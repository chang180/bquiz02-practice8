<?php
include_once "../base.php";
if(!empty($_POST['del'])){
    foreach($_POST['del'] as $id) $Admin->del($id);
}
to("../admin.php?do=admin");