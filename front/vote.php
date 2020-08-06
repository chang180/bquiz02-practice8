<form action="api/vote.php" method="post">
    <fieldset>
        <?php
    $row=$Que->find($_GET['id']);
        ?>
        <legend>目前位置：首頁 > 問卷調查 > <?=$row['text'];?></legend>
        <h3><?=$row['text'];?></h3>
        <?php
    $opts=$Que->all(['parent'=>$_GET['id']]);
    foreach($opts as $o){
        ?>
    <input type="radio" name="opt" value="<?=$o['id'];?>"><?=$o['text'];?><br>
        <?php
    }
        ?>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <button>我要投票</button>
    </fieldset>
</form>