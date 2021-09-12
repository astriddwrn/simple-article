<?php require "./config/head.php";

$stmt = $conn->prepare("SELECT * FROM `article` WHERE `article_published` = ? order by `article_created_time` ASC LIMIT 1");
$stmt->execute([0]);
$articles = $stmt->fetch();

$id = $articles['article_id'];

try{
    $sql = "UPDATE `article`
    SET `article_published` = ?
    WHERE `article_id` = ?";

    $stmt = $conn->prepare($sql);

    $stmt->execute([1, $id]);
}
catch (PDOException $e) {
    echo $e->getMessage();
}

?>