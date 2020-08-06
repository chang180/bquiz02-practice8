<form action="api/que.php" method="post">
    <fieldset>
        <legend>新增問卷</legend>
        問卷名稱<input type="text" name="text" id="text"><br>
        選項<input type="text" name="opt[]" id="opt"><button type="button" onclick="moreOpt()">更多</button><br>
        <button>新增</button><button type="reset">清空</button>
    </fieldset>
</form>
<script>
function moreOpt(){
    let el=`
    <br>選項<input type="text" name="opt[]">
    `;
    $("#opt").after(el);
}
</script>