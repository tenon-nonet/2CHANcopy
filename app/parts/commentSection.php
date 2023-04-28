<?php
include("app/functions/comment_get.php");
?>

<section>
    <?php foreach ($comment_array as $comment) : ?>
        <!-- スレッドのidとコメントのthread_idが一致した時 -->
        <?php if ($thread["id"] == $comment["thread_id"]) : ?>
            <article>
                <div class="wrapper">
                    <div class="nameArea">
                        <span>Name：</span>
                        <p class="username"><?php echo $comment["username"]; ?></p>
                        </p>
                        <time>：<?php echo $comment["post_date"]; ?><time>
                    </div>
                    <p class="comment"><?php echo $comment["body"]; ?></p>
                </div>
            </article>
        <?php endif; ?>
    <?php endforeach ?>
</section>