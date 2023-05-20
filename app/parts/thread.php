<?php
include_once("../database/connect.php");
include("../functions/comment_add.php");
include("../functions/thread_get.php");
?>

<?php foreach ($thread_array as $thread) : ?>
    <div class="threadWrapper">
        <div class="childWrapper">
            <div class="threadTitle">
                <span>[Title]</span>
                <h1><?php echo $thread["title"]; ?></h1>
            </div>
            <?php include("commentSection.php"); ?>
            <?php include("commentForm.php"); ?>
        </div>
    </div>

<?php endforeach; ?>