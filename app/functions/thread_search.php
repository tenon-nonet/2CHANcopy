<?php
$error_message = array();
// スレッド検索ボタンが押された時
if (isset($_POST["threadSearchButton"])) {
        //トランザクション開始
        $pdo->beginTransaction();
        try {
            // SQLコマンドを決定
            $sql = "SELECT * FROM thread WHERE title LIKE :title;";
            // SQl文を準備
            $statement = $pdo->prepare($sql);
            $title = "%" . $_POST["title"] . "%";
            // bindParamで:titleをtitleにに代入
            $statement->bindParam(":title", $title, PDO::PARAM_STR);
            // 実行
            $statement->execute();
            // titleに一致しているものをresultに配列で代入してる
            $result = $statement->fetchALL(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row["title"];
            };
            // トランザクション終了
            $pdo->commit();

        } catch (Exception $e) {
            $pdo->rollback();
        };
    };
?>
