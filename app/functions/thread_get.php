<?php
$thread_array = array();

// コメントデータ尾をてーぶるから取得
$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();

$thread_array = $statement;