<!-- Include Head -->
<?php include "config/head.php"; ?>
<?php

// Check if the admin is already logged in, if yes then redirect him to home page
if (!$loggedin) {
    header("location: index.php");
    exit;
}

$stmt = $conn->prepare("SELECT * FROM category");
$stmt->execute();
$categories = $stmt->fetchAll();

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
    <div class="text-right w-100 mb-3"><a href="add_category.php"><img class="add" src="./img/icon/add.svg" alt=""></a></div>
    

<table class="table table-borderless table-condensed table-hover">
    <thead>
        <tr>
            <th class="judul" scope="col">Kategori</th>
            <th class="penulis" scope="col">Warna</th>
            <th class="aksi" scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($categories as $row) :
                ?>
                <tr>
                    <td><?= $row['category_name'] ?></td>
                    <td class="penulis" style="color: <?= $row['category_color'] ?>"><?= $row['category_color'] ?></td>
                    <td>
                        <a class="view" href="kategori-artikel.php?id=<?= $row['category_id'] ?> ">
                            <img  class="icon" src="./img/icon/eye.png" alt="">
                        </a>
                        <a href="update_category.php?id=<?= $row['category_id'] ?> ">
                            <img class="icon mx-2 edit" src="./img/icon/edit.png" alt="">
                        </a>
                        <a class="delete" href="config/delete.php?type=category&id=<?= $row['category_id'] ?> ">
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

</html>