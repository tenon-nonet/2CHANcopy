<?php
include_once("../database/connect.php");
include("../functions/comment_add.php");
include("../functions/thread_get.php");
include("../functions/comment_delete.php");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Thread</title>
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="../../assets/styleSmart.css">
</head>

<body>
    <?php include("../../app/parts/header.php") ?>
    <?php include("../../app/parts/validation.php") ?>
    <?php include("../../app/functions/thread_search.php"); ?>
    <div style="padding-left: 36px; color: white;">
        <h2 class="threadName" style="margin-top: 20px; margin-bottom: 0;">Search A Thread</h2>
    </div>

    <form method="POST">
        <label style="color: white">Thread name</label>
        <input type="text" name="title" placeholder="検索ワードを入れてね！">
        <input type="submit" value="Search!" name="threadSearchButton">
    </form>

    <input type="submit" value="Random!" name="threadRandomButton">
    <button><a href="./threadPage.php">Back!</a></button>
    <img class="searchImg" src="https://nonet3.files.wordpress.com/2023/05/00004-1349217655-removebg-preview-1.png?w=500" alt="">

    <?php foreach ($result as $row) : ?>
        <div class="threadWrapper">
            <div class="threadTitle">
                <span>[Title]</span>
                <h1><?php echo $row["title"]; ?></h1>
            </div>
            <?php
            include("../functions/comment_get.php");
            include("../parts/commentSectionSearch.php");
            ?>
        </div>
    <?php endforeach; ?>
</body>

</html>