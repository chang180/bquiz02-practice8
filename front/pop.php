<fieldset>
    <legend>目前位置：首頁 > 人氣文章區</legend>
    <table>
        <tr>
            <td width="30%">標題</td>
            <td width="50%">內容</td>
            <td>人氣</td>
        </tr>
        <?php
        $rows = $News->all(['sh' => 1]);
        $total = count($rows);
        $div = 5;
        $pages = ceil($total / $div);
        $now = $_GET['p'] ?? "1";
        $start = ($now - 1) * $div;
        $prev = (($now - 1) > 0) ? ($now - 1) : 1;
        $next = (($now + 1) <= $pages) ? ($now + 1) : $pages;
        $rows = $News->all(['sh' => 1], " ORDER BY good DESC LIMIT $start,$div");
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><?= $row['title']; ?></td>
                <td class="change">
                    <div class="part"><?= mb_substr($row['text'], 0, 20, "utf8"); ?>...</div>
                    <div class="alerr"><?= nl2br($row['text']); ?></div>
                </td>
                <td>
<?=$row['good'];?>個人說<img src="icon/02B03.jpg" width="30px">
                    <?php
                    if (!empty($_SESSION['login'])) {
                        $chk = $Log->find(['news' => $row['id'], 'user' => $_SESSION['login']]);
                        if (empty($chk)) {
                    ?>
                            <a href="#" id="good<?= $row['id']; ?>" onclick="good('<?= $row['id']; ?>','1','<?= $_SESSION['login']; ?>')">讚</a>
                        <?php
                        } else {
                        ?>
                            <a href="#" id="good<?= $row['id']; ?>" onclick="good('<?= $row['id']; ?>','2','<?= $_SESSION['login']; ?>')">收回讚</a>

                    <?php
                        }
                    }
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php
    echo "<a href='?do=pop&p=$prev'> < </a>";
    for ($i = 1; $i <= $pages; $i++) {
        $font = ($now == $i) ? "32px" : "20px";
        echo "<a href='?do=pop&p=$i' style='font-size:$font'>$i</a>";
    }
    echo "<a href='?do=pop&p=$next'> > </a>";
    ?>
</fieldset>
<script>
    $(".change").hover(function() {
        $(this).children(".alerr").toggle();
    })
</script>