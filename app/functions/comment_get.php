<?php
$comment_array = array();
// コメントデータをテーブルから取得
$sql = "SELECT * FROM comment";
$statement = $pdo->prepare($sql);
$statement->execute();
$comment_array = $statement;
