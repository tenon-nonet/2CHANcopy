<?php
$position = 0;
if (isset($_POST["submitButton"])) {
    $position = $_POST["position"];
}
?>
<form class="formWrapper" method="POST">
    <div>
        <input  class="buttonPost" type="submit" value="Post!" name="submitButton">
        <input placeholder="名前を書いてね！" class="namePost" type="text" name="username" value="<?php if ($thread["id"] == $comment["thread_id"]) echo $_SESSION["username"] ?>">

        <input type="hidden" name="threadID" value="<?php echo $thread["id"]; ?>">
    </div>
    <div>
        <textarea placeholder="コメントを書いてね！" class="commentTextArea" name="body"></textarea>
    </div>

    <!-- 位置取得用 -->
    <input type="hidden" name="position" value="0">
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(() => {
        $("input[type=submit]").click(() => {
            //現在のスクロール位置を取得
            let position = $(window).scrollTop();
            $("input:hidden[name=position]").val(position);
        })
        $(window).scrollTop(<?php echo $position; ?>);
    })
</script>