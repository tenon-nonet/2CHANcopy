<?php

$error_message = array();

if (isset($_POST["submitButton"])) {
    // 名前にゅうりょくチェック
    if (empty($_POST["username"])) {
        $error_message["username"] = "お名前を入力してください";
    } else {
        $escaped["username"] = htmlspecialchars($_POST["username"], ENT_QUOTES, "UTF-8");
    }

    //コメント入力チェック 
    if (empty($_POST["body"])) {
        $error_message["body"] = "コメントを入力してください";
    } else {
        $escaped["body"] = htmlspecialchars($_POST["body"], ENT_QUOTES, "UTF-8");
    }

    if (empty($error_message)) {
        $post_date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO `comment` (`username`, `body`, `post_date`) VALUES (:username, :body, :post_date);";
        $statement = $pdo->prepare($sql);

        // 値をセットする
        $statement->bindParam(":username", $escaped["username"], PDO::PARAM_STR);
        $statement->bindParam(":body", $escaped["body"], PDO::PARAM_STR);
        $statement->bindParam(":post_date", $post_date, PDO::PARAM_STR);

        $statement->execute();
    }
}

