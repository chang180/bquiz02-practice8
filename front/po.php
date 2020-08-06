<fieldset>
    <legend>目前位置：首頁 > 分類網誌 > <span id="head"></span></legend>
    <div class="contain" style="display:flex;justify-content:center">
<fieldset style="width:30%">
    <legend>分類網誌</legend>
    <div id="1" onclick="getList(1)">健康新知</div>
    <div id="2" onclick="getList(2)">菸害防制</div>
    <div id="3" onclick="getList(3)">癌症防治</div>
    <div id="4" onclick="getList(4)">慢性病防治</div>
</fieldset>
<fieldset style="width:50%">
    <legend>文章列表</legend>
    <div class="post"></div>
</fieldset>
</div>
</fieldset>
<script>
    getList(1);
    function getList(type){
        $("#head").text($("#"+type).text())
        $.get("api/getlist.php",{type},function(res){
            $(".post").html(res);
        })
    }
    function getPost(id){
        $.get("api/getpost.php",{id},function(res){
            $(".post").html(res);
        })
    }
</script>