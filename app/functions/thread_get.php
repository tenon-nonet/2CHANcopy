<?php
$thread_array = array();

// コメントデータをテーブルから取得
$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();

$thread_array = $statement;
