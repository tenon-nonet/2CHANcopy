<?php
if (isset($_POST["deleteButton"])) {
        //トランザクション開始
        $pdo->beginTransaction();

        try {
            $sql = "DELETE FROM comment WHERE thread_id=:thread_id and id = :id;";
            $statement = $pdo->prepare($sql);
            // 値をセットする
            $statement->bindParam(":id", $_POST["id"], PDO::PARAM_STR);
            $statement->bindParam(":thread_id", $_POST["thread_id"],PDO::PARAM_STR);
            $statement->execute();
            $pdo->commit();
        } catch (Exception $error) {
            $pdo->rollback();
        };
    };