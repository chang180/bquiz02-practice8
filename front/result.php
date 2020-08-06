    <fieldset>
        <?php
        $row = $Que->find($_GET['id']);
        ?>
        <legend>目前位置：首頁 > 問卷調查 > <?= $row['text']; ?></legend>
        <h3><?= $row['text']; ?></h3>
        <?php
        $opts = $Que->all(['parent' => $_GET['id']]);
        $total = (($row['count']) == 0) ? 1 : ($row['count']);

        foreach ($opts as $o) {
            $rate = $o['count'] / $total;
        ?>
            <div style="display:flex">
                <div style="width:20%"><?= $o['text']; ?></div>
                <div style="width:<?= round(60 * $rate); ?>%;background:#ccc;height:20px"></div>
                <div><?= $o['count']; ?>票(<?= round($rate * 100); ?>%)</div>
            </div>
        <?php
        }
        ?>
        <button onclick="location.href='?do=que'">返回</button>
    </fieldset>