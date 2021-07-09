<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

// Get Latest articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC  LIMIT 4");
$stmt->execute();
$articles = $stmt->fetchAll();

// Get Most Read Articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id order by RAND() LIMIT 6");
$stmt->execute();
$most_read_articles = $stmt->fetchAll();

// get article by categories
$stmt = $conn->prepare("SELECT * FROM `category` ");
$stmt->execute();
$categories = $stmt->fetchAll();

if (isset($_GET["catID"])) {

    $catID = $_GET["catID"];

    // Get Category Info
    $stmt = $conn->prepare("SELECT * FROM `category` WHERE category_id = ?");
    $stmt->execute([$catID]);
    $category = $stmt->fetch();

    // Get Latest articles
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE id_categorie = ?  ORDER BY `article_created_time` DESC ");
    $stmt->execute([$catID]);
    $article_by_category = $stmt->fetchAll();
} else {

    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC ");
    $stmt->execute();
    $article_by_category = $stmt->fetchAll();
}

?>

<title>Home</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>
    <!-- </Header> -->

    <!-- categories -->
    <div class="categories padding-section d-block">
        <div class="d-flex flex-direction-row align-items-center flex-wrap justify-content-center">
            <li class="categories-active my-2"><a href="">Semua</a></li>
            <?php foreach ($categories as $category) : ?>
                <li class="ml-4"><a href="kategori-artikel.php?catID=<?= $category['category_id'] ?>" class="text-muted"><?= $category['category_name'] ?></a></li>
            <?php endforeach;  ?>
         </div>
     </div>
     <!-- </ categories -->

     <!-- hero section -->
     <section class="hero w-100 position-relative overflow-hidden">
        <?php foreach ($most_read_articles as $article) : ?>
         <div class="slide">
            <div class="img-cont position-absolute w-100">
                <img class="" src="./img/article/<?= $article['article_image'] ?>" alt="">
             </div>
             <div class="row padding-section ">
                <div class="col-lg-8 col-10 position-absolute text">
                    <div class="title mb-3"><?= $article['article_title'] ?></div>
                    <div class="description mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</div>
                    
                    <div class="row no-gutters">
                    <a class="button-green col-md-4 col-sm-6 col-8 p-2 text-center" href="artikel-dapur-tolisfresh-terbaru.php?id=<?= $article['article_id'] ?>">Read Article</a>
                    </div>
                 </div>
             </div>
         </div>
         <?php endforeach;  ?>
         <div class="arrow position-absolute">
             <img class="mr-3 prev" src="./img/icon/arrow-prev.png" alt="">
             <img class="next" src="./img/icon/arrow-next.png" alt="">
         </div>
         
     </section>

     <!-- populer & terbaru section -->
     <section class="trending artikels my-4 padding-section">
        <div class="row">
            <div class="col-lg-8 col-12 row mb-5">
                <div class="header mb-4 col-12">
                    <span>Artikel Terbaru</span>
                </div>

                <?php foreach ($articles as $article) : ?>
                <div class="col-md-6 col-12 mb-4 artikel">
                    <div class="img-cont mb-2 overflow-hidden">
                        <img class="w-100" src="./img/article/<?= $article['article_image'] ?>" alt="">
                    </div>
                    <div class="title mb-2">
                        <a href="artikel-dapur-tolisfresh-terbaru.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a>
                    </div>
                    <div class="date mb-2">
                        <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                    </div>
                    <div class="description mb-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    </div>
                    <div class="category mb-2" style="color:<?= $article['category_color'] ?>">
                        <a href="articleOfCategory.php?catID=<?= $article['category_id'] ?>" ><?= $article['category_name'] ?></a>
                    </div>
                </div>
                <?php endforeach;  ?>
            </div>

            <div class="col-lg-4 col-12 no-gutters pl-lg-4">
                <div class="header mb-4 col">
                    <span>Artikel Populer</span>
                </div>

                <?php foreach ($most_read_articles as $article) : ?>
                <div class="col artikel mb-4">
                    <div class="title mb-2 ">
                        <a href="artikel-dapur-tolisfresh-terbaru.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a>
                    </div>
                    <div class="date">
                        <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                    </div>
                    <div class="category" style="color:<?= $article['category_color'] ?>">
                        <a href="articleOfCategory.php?catID=<?= $article['category_id'] ?>" ><?= $article['category_name'] ?></a>
                    </div>
                </div>
                <?php endforeach;  ?>
             
            </div>
        </div>
     </section>

     <?php foreach ($categories as $category) : ?>
     <section class="kategori artikels mb-5 padding-section">
        <div class="header mb-4"> 
            <a href="kategori-artikel.php?catID=<?= $category['category_id'] ?>">
                <?= $category['category_name'] ?>
            </a></div>
        <div class="row">
        <?php 
            $catID = $category['category_id'];
            $stmt2 = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE id_categorie = ?  ORDER BY `article_created_time` DESC ");
            $stmt2->execute([$catID]);
            $articles = $stmt2->fetchAll();
        ?>
            <?php foreach (array_slice($articles, 0, 3) as $article) : ?>
            <div class="col-md-4 col-12 artikel">
                <div class="img-cont mb-2 overflow-hidden">
                    <img class="w-100" src="./img/article/<?= $article['article_image'] ?>" alt="">
                </div>
                <div class="title mb-2">
                    <a href="artikel-dapur-tolisfresh-terbaru.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a>
                </div>
                <div class="date mb-2">
                    <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                </div>
                <div class="description mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                </div>
                <div class="category mb-2" style="color:<?= $article['category_color'] ?>">
                    <a href="articleOfCategory.php?catID=<?= $article['category_id'] ?>" ><?= $article['category_name'] ?></a>
                </div>
            </div>
            <?php endforeach;  ?>

        </div>
     </section>
     <?php endforeach; ?>

    <!-- Footer -->
    <?php include "assest/footer.php" ?>
    <!-- </Footer> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/blog.js"></script>
</body>

</html>