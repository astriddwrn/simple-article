<!-- Include Head -->
<?php include "config/head.php"; ?>
<?php

// Check if the admin is already logged in, if yes then redirect him to home page
if (!$loggedin) {
    header("location: index.php");
    exit;
}

// Get all Articles Data
$stmt = $conn->prepare("SELECT * FROM article, author, category WHERE id_categorie = category_id AND author_id = id_author ORDER BY article_id DESC");
$stmt->execute();
$data = $stmt->fetchAll();

?>

<link type="text/css" rel="stylesheet" href="css/dasbor.css" />
<title>Dasbor</title>

</head>

<body>
    <!-- Header -->
    <?php include "config/header.php" ?>
    <!-- </Header> -->    

    <div class="dasbor w-100 my-3">Dasbor</div>
    <div class="d-flex flex-direction-row w-100 justify-content-center section">
        <div><a href="dasbor.php" class=" text-center w-100">Artikel</a></div>
        <div class="mx-4"><a href="categories.php" class=" text-center w-100">Kategori</a></div>
        <div><a href="author.php" class=" text-center w-100">Author</a></div>
    </div>
    
    <div class="text-right w-100 mb-3"><a href="add_article.php"><img class="add" src="./img/icon/add.svg" alt=""></a></div>
    

<table class="table table-borderless table-condensed table-hover">
    <thead>
        <tr>
            <th class="judul" scope="col">Artikel</th>
            <th class="penulis" scope="col">Penulis</th>
            <th class="kategori" scope="col">Kategori</th>
            <th class="aksi" scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data as $row) :
                ?>
                <tr>
                    <td><?= $row['article_title'] ?></td>
                    <td class="penulis"><?= $row['author_fullname'] ?></td>
                    <td class="kategori"><?= $row['category_name'] ?></td>
                    <td>
                        <a class="view" href="artikel/<?= $row['article_slug'] ?> ">
                            <img  class="icon" src="./img/icon/eye.png" alt="">
                        </a>
                        <a href="update_article.php?id=<?= $row['article_id'] ?> ">
                            <img class="icon mx-2 edit" src="./img/icon/edit.png" alt="">
                        </a>
                        <a class="delete" href="config/delete.php?type=article&id=<?= $row['article_id'] ?> ">
                            <img class="icon" src="./img/icon/trash.png" alt="">
                        </a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
    </tbody>
    </table>

    <script src=""></script>
   




</body>