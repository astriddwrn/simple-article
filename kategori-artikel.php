<!-- Include Head -->
<?php include "config/head.php"; ?>
<?php
$category_name = $_GET['name'];
if($category_name=="semua"){
    $catID = "semua";
}
else{
    $category_name = preg_replace('~[-]+~', ' ', $category_name);
    $stmt = $conn->prepare("SELECT * FROM `category`  WHERE `category_name` = ?");
    $stmt->execute([$category_name]);
    $cat = $stmt->fetch();
    $catID = $cat["category_id"];
}

// Get All Categories
$stmt = $conn->prepare("SELECT * FROM `category` ");
$stmt->execute();
$categories = $stmt->fetchAll();

// get specific category by id
if ($catID == 'semua') {
    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE `article_published` = ? ORDER BY `article_created_time` DESC ");
    $stmt->execute([1]);
    $articles = $stmt->fetchAll();
    $category = 'semua';
} 
else {
     // Get Category Info
     $stmt = $conn->prepare("SELECT * FROM `category` WHERE category_id = ?");
     $stmt->execute([$catID]);
     $categoryRow = $stmt->fetch();
     $category = $categoryRow['category_name'];
 
     // Get Latest articles
     $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE id_categorie = ?,`article_published` = ?  ORDER BY `article_created_time` DESC ");
     $stmt->execute([$catID, 1]);
     $articles = $stmt->fetchAll();
}

// get month
function findMonthById($id){
    $array = array( '01'=>'Januari', '02'=>'Febuari', '03'=>'Maret', '04'=>'April', '05'=>'Mei', '06'=>'Juni', '07'=>'Juli', '08'=>'Agustus', '09'=>'September', '10'=>'Oktober', '11'=>'November', '12'=>'Desember');
    if ( isset( $array[$id] ) ) {
        return $array[$id];
    }
    return false;
}

// pagination
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 15;
$offset = ($pageno-1) * $no_of_records_per_page;

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}

if($catID === "semua"){
    $total_pages_sql = "SELECT COUNT(*) FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC ";
    $result = mysqli_query($link,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC LIMIT $offset, $no_of_records_per_page");
    $stmt->execute();
    $articlesFinal = $stmt->fetchAll();
}
else{
    $total_pages_sql = "SELECT COUNT(*) FROM `article` INNER JOIN category ON id_categorie=category_id WHERE id_categorie = $catID  ORDER BY `article_created_time` DESC ";
    $result = mysqli_query($link,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE id_categorie = ?  ORDER BY `article_created_time` DESC LIMIT $offset, $no_of_records_per_page");
    $stmt->execute([$catID]);
    $articlesFinal = $stmt->fetchAll();
}
?>

<title>Artikel</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <?php include "config/header.php" ?>
    <!-- </Header> -->

    <!-- categories -->
    <div class="categories padding-section d-block">
        <div class="d-flex flex-direction-row align-items-center flex-wrap justify-content-center">
            <li class=" my-2"><a href="">Semua</a></li>
            <?php foreach ($categories as $cat) : ?>
                <li class="ml-4
                <?= $cat['category_id']==$catID ? "categories-active" : ""  ?>
                
                "><a href="artikel-kategori/<?= slugify($cat['category_name'],'-') ?>" class="text-muted"><?= $cat['category_name'] ?></a></li>
            <?php endforeach;  ?>
         </div>
     </div>
     <!-- </ categories -->

     <section class="kategori artikels mb-5 padding-section">
        <div class="header my-4 text-center">Artikel <?php if($catID!="semua"){$category;} ?></div>
        <div class="row mb-5">

        <?php foreach ($articlesFinal as $article) : ?>
            <div class="col-md-4 col-12 artikel">
                <div class="img-cont mb-2 overflow-hidden">
                    <img class="w-100 lazy" data-src="./img/article/<?= $article['article_image'] ?>" alt="">
                </div>
                <div class="title mb-2">
                    <a href="artikel/<?= slugify($article['article_title'],'-') ?>"><?= $article['article_visibletitle'] ?></a>
                </div>
                <div class="date mb-2">
                <?='';
                    $date = date_format(date_create($article['article_created_time']), "d");
                    $month = findMonthById(date_format(date_create($article['article_created_time']), "m"));
                    $year = date_format(date_create($article['article_created_time']), "Y");
                    echo $date .' '. $month .' '. $year;
                    ?>
                </div>
                <div class="description mb-2">
                    <?= strip_tags(preg_replace("#<p>&nbsp;</p>#", "", substr($article['article_content'], 0, 200)));?>...
                </div>
                <div class="category mb-2" style="color:<?= $article['category_color'] ?>">
                    <a href="artikel-kategori/<?= slugify($article['category_name'],'-') ?>" ><?= $article['category_name'] ?></a>
                </div>
            </div>
            <?php endforeach;  ?>

        </div>

        <ul class="pagination">
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                <a href=<?php echo "artikel-kategori/".slugify($category,'-')."?pageno=1";?>>Pertama</a>
            </li>
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno <= 1){ echo "artikel-kategori/".slugify($category,'-')."?pageno=".($pageno); } else { echo "artikel-kategori/".slugify($category,'-')."?pageno=".($pageno - 1); } ?>"><<</a>
            </li>                                                                                           
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno >= $total_pages){ echo "artikel-kategori/".slugify($category,'-')."?pageno=".($pageno); } else { echo "artikel-kategori/".slugify($category,'-')."?pageno=".($pageno + 1); } ?>">>></a>
            </li>
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href=<?php echo "artikel-kategori/".slugify($category,'-')."?pageno=".$total_pages; ?>>Terakhir</a>
            </li>
        </ul>

        </div>
        <a href="https://websiteori.com/"><img class="w-100 border" src="./img/iklan/websiteori.png" alt=""></a>

     </section>

    <!-- Footer -->
    <?php include "config/footer.php" ?>
    <!-- </Footer> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
        $('.disabled a').click(function(e){
            e.preventDefault();
        });
    </script>
    <script src="./js/blog.js"></script>
</body>

</html>

        