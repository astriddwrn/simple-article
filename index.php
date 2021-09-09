<!-- Include Head -->
<?php include "config/head.php"; ?>
<?php

// Get Latest articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE `article_published` = ? ORDER BY `article_created_time` DESC  LIMIT 4");
$stmt->execute([1]);
$articles = $stmt->fetchAll();

// Get Most Read Articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE `article_published` = ? order by RAND() LIMIT 6");
$stmt->execute([1]);
$most_read_articles = $stmt->fetchAll();

// Get all Articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id WHERE `article_published` = ? order by RAND() LIMIT 15");
$stmt->execute([1]);
$all_articles = $stmt->fetchAll();

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

// get month
function findMonthById($id){
    $array = array( '01'=>'Januari', '02'=>'Febuari', '03'=>'Maret', '04'=>'April', '05'=>'Mei', '06'=>'Juni', '07'=>'Juli', '08'=>'Agustus', '09'=>'September', '10'=>'Oktober', '11'=>'November', '12'=>'Desember');
    if ( isset( $array[$id] ) ) {
        return $array[$id];
    }
    return false;
}



?>

<title>Digital Marketing Agency - Website Ori | Blog </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta name="description" content="WebsiteOri adalah agensi digital marketing sebagai partner terbaik untuk bisnis Anda dalam menghadapi Era Digital yang serba teknologi." itemprop="description" />
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow">
<meta name="googlebot-news" content="index, follow, follow" />
<meta  name="googlebot" content="index, follow, follow" />
<meta name="author" content="Kompas Cyber Media">
<meta name="robots" content="index, follow" />
<meta name="language" content="id" />
<meta name="geo.country" content="id" />
<meta http-equiv="content-language" content="In-Id" />
<meta name="geo.placename" content="Indonesia" />

<meta name="content_category" content="home" />
<meta name="content_subcategory" content="" />
<meta name="content_location" content="" />
<meta name="content_author_id" content="" />
<meta name="content_author" content="" />
<meta name="content_editor_id" content="" />
<meta name="content_editor" content="" />
<meta name="content_lipsus" content="" />
<meta name="content_lipsus_id" content="" />
<meta name="content_type" content="" />
<meta name="content_PublishedDate" content="" />
<meta property="article:published_time" content="" />
<meta name="content_source" content="" />
<meta name="content_tag" content="Jasa website jakarta" />
<meta name="content_tags" content="Jasa website jakarta, Digital agency, Contoh website, Website company profile" />
<meta name="content_total_words" content="" />

<meta name="thumbnailUrl" content="https://websiteori.com/images/logo.png" itemprop="thumbnailUrl" />
<meta content="https://websiteori.com/" itemprop="url" />



</head>

<body>

    <!-- Header -->
    <?php include "config/header.php" ?>
    <!-- </Header> -->

    <!-- categories -->
    <div class="categories padding-section d-block">
        <div class="d-flex flex-direction-row align-items-center flex-wrap justify-content-center">
            <li class="categories-active my-2"><a href="">Semua</a></li>
            <?php foreach ($categories as $category) : ?>
                <li class="ml-4"><a href="artikel-kategori/<?= slugify($category['category_name'], '-') ?>" class="text-muted"><?= $category['category_name'] ?></a></li>
            <?php endforeach;  ?>
         </div>
     </div>
     <!-- </ categories -->

     <!-- hero section -->
     <section class="hero w-100 position-relative overflow-hidden">
        <?php foreach ($most_read_articles as $article) : ?>
        <div class="slide">
            <div class="img-cont position-absolute w-100">
                <img class=" " src="./img/article/<?= $article['article_image'] ?>" alt="Websiteori">
            </div>
            <div class="row padding-section ">
                <div class="col-lg-8 col-10 position-absolute text">
                    <h1 class="title mb-3"><?= $article['article_visibletitle'] ?></h1>
                    <div class="description mb-3">                        
                    <?= strip_tags(preg_replace("#<p>&nbsp;</p>#", "", substr($article['article_content'], 0, 200)));?>...
                    </div>
                    <div class="row no-gutters">
                        <a class="button-green col-md-4 col-sm-6 col-8 p-2 text-center" href="artikel/<?= slugify($article['article_title'], '-') ?>">Read Article</a>
                    </div>
                </div>
            </div>
        </div>
         <?php endforeach;  ?>
        <div class="arrow position-absolute">
             <img class="mr-3 prev" src="./img/icon/arrow-prev.svg" alt="WebsiteOri Jasa website jakarta">
             <img class="next" src="./img/icon/arrow-next.svg" alt="WebsiteOri Jasa website jakarta">
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
                        <img class="lazy w-100" data-src="./img/article/<?= $article['article_image'] ?>" alt="websiteori">
                    </div>
                    <div class="title mb-2">
                        <a href="artikel/<?= slugify($article['article_title'], '-') ?>"><?= $article['article_visibletitle'] ?></a>
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
                        <a href="artikel-kategori/<?= slugify($article['category_name'],'-')?>" ><?= $article['category_name'] ?></a>
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
                        <a href="artikel/<?= slugify($article['article_title'], '-') ?>"><?= $article['article_visibletitle'] ?></a>
                    </div>
                    <div class="date">
                        <?='';
                        $date = date_format(date_create($article['article_created_time']), "d");
                        $month = findMonthById(date_format(date_create($article['article_created_time']), "m"));
                        $year = date_format(date_create($article['article_created_time']), "Y");
                        echo $date .' '. $month .' '. $year;
                        ?>
                    </div>
                    <div class="category" style="color:<?= $article['category_color'] ?>">
                        <a href="artikel-kategori/<?= slugify($article['category_name'],'-')?>" ><?= $article['category_name'] ?></a>
                    </div>
                </div>
                <?php endforeach;  ?>
             
            </div>
        </div>
        <a href="https://websiteori.com/"><img class="w-100 border mb-5" src="./img/iklan/websiteori.png" alt=""></a>

     </section>

     <!-- all articles -->
     <section class="kategori artikels mb-5 padding-section">
        <div class="header mb-4"> 
            Artikel Lainnya
        </div>
     <div class="row">
         
        <?php foreach ($all_articles as $article) : ?>
            <div class="col-md-4 col-12 artikel mb-5">
            
                <div class="img-cont mb-2 overflow-hidden">
                    <img class="w-100 lazy" data-src="./img/article/<?= $article['article_image'] ?>" alt="websiteori">
                </div>
                <div class="title mb-2">
                    <a href="artikel/<?= slugify($article['article_title'], '-') ?>"><?= $article['article_visibletitle'] ?></a>
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
                    <a href="artikel-kategori/<?= slugify($article['category_name'],'-')?>" ><?= $article['category_name'] ?></a>
                </div>
                
            </div>
            
        <?php endforeach;  ?>
        
        </div>

        <div class="more-wrapper">
            <a class="button-green more" href="artikel-kategori/semua">Lihat lebih banyak lagi!</a>
        </div>
        
        
     </section>



    <!-- Footer -->
    <?php include "config/footer.php" ?>
    <!-- </Footer> -->

    <script src="./js/blog.js"></script>
</body>
</html>