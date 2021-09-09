<?php include "config/head.php"; ?>

<?php 

$sql = "UPDATE `article`
    SET article_published` = ?
    WHERE `article_published` = ?
    order by `article_created_time` ASC LIMIT 1";

$stmt = $conn->prepare($sql);

$stmt->execute([1, 0]);

?>