<div>
請輸入信箱以查詢密碼<br>
<input type="text" name="email" id="email"><br>
<div class="res"></div>
<button id="find">尋找</button>
</div>
<script>
    $("#find").on("click",function(){
        $.get("api/chkemail.php",{"email":$("#email").val()},function(res){
            $(".res").text(res);
        })
    })
</script>