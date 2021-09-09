<?php include "config/head.php"; ?>

<?php
$my_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$article_slug = substr($my_url, strrpos($my_url, '/' )+1);

// get all articles in array
$sql = "SELECT article_visibletitle, article_slug FROM `article` order by RAND() LIMIT 30";
$result = mysqli_query($link, $sql) or die("Error in Selecting " . mysqli_error($link));
$all_articles_array = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $all_articles_array[] = $row;
    }

// Get Article Info
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN `author` ON `article`.id_author = `author`.author_id  WHERE `article_slug` = ?");
$stmt->execute([$article_slug]);
$article = $stmt->fetch();
$article_id = $article["article_id"];

// get author info
$stmt = $conn->prepare("SELECT * FROM `author` WHERE author_id = ?");
$stmt->execute([$article["id_author"]]);
$author = $stmt->fetch();

// Get Category of article
$stmt = $conn->prepare("SELECT * FROM `category` WHERE `category_id` = ?");
$stmt->execute([$article["id_categorie"]]);
$category = $stmt->fetch();

$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id order by RAND()");
$stmt->execute();
$random_articles = $stmt->fetchAll();

// get article by categories
$stmt = $conn->prepare("SELECT * FROM `category` ");
$stmt->execute();
$categories = $stmt->fetchAll();

// get categories
$stmt = $conn->prepare("SELECT * FROM `category` ");
$stmt->execute();
$categories = $stmt->fetchAll();

// get month
function findMonthById($id){
    $array = array( '01'=>'Januari', '02'=>'Febuari', '03'=>'Maret', '04'=>'April', '05'=>'Mei', '06'=>'Juni', '07'=>'Juli', '08'=>'Agustus', '09'=>'September', '10'=>'Oktober', '11'=>'November', '12'=>'Desember');
    if ( isset( $array[$id] ) ) {
        return $array[$id];
    }
    return false;
}

// views count 
$sql = "UPDATE article SET article_views = article_views + 1 WHERE article_id = '{$article_id}'";
$conn->query($sql);

?>
    <link rel="stylesheet" href="css/viewArticle.css?v=<?= $version ?>">

    <title><?= $article["article_title"] ?> | WebsiteOri</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?= $article["article_description"] ?>" itemprop="description" />
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

    <meta name="content_category" content="<?= $article["article_category"] ?>" />
    <meta name="content_subcategory" content="<?= $article["article_category"] ?>" />
    <meta name="content_location" content="" />
    <meta name="content_author" content="<?= $article["article_author"] ?>" />
    <meta name="content_type" content="Standard" />
    <meta name="content_PublishedDate" content="<?= $article["article_created_time"] ?>" />
    <meta property="article:published_time" content="<?= $article["article_created_time"] ?>" />
    <meta name="content_source" content="" />
    <meta name="content_tag" content="<?= $article["article_keyword"] ?>" />

    <meta name="all-articles" content="<?php echo json_encode($all_articles_array); ?>">

</head>

<body>
    <!-- <?php echo json_encode($all_articles_array); ?> -->
    <div data-side="front" data-params="<?php echo htmlspecialchars(json_encode($all_articles_array), ENT_QUOTES, 'UTF-8'); ?>">

    <!-- <div data-side="front" data-params="<?php echo htmlspecialchars(json_encode($random_articles), ENT_QUOTES, 'UTF-8'); ?>"> -->
    
     <?php include "config/header.php" ?>
     <!-- categories -->
     <div class="categories padding-section d-block">
        <div class="d-flex flex-direction-row align-items-center flex-wrap justify-content-center">
            <li class=" my-2"><a href="">Semua</a></li>
            <?php foreach ($categories as $category) : ?>
                <li class="ml-4"><a href="artikel-kategori/<?= slugify($category['category_name'], '-') ?>" class="text-muted"><?= $category['category_name'] ?></a></li>
            <?php endforeach;  ?>
         </div>
     </div>
     <!-- </ categories -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
            <div class="modal-header">
                <div>Bagikan artikel ini!</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="d-flex flex-direction-row align-items-center justify-content-around my-4 flex-wrap px-4">
                <div class="text-center my-1" >
                    <a target="_blank" href="https://twitter.com/intent/tweet?url=<?= $actual_link ?>&text=<?= $article["article_title"] ?>"><img src="./img/icon/twitter-share.png" alt="Twitter WebsiteOri"></a>
                    <div>Twitter</div>
                </div>
                <div class=" text-center  my-1">
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= $actual_link ?>"><img src="./img/icon/facebook-share.png" alt="Facebook WebsiteOri"></a>
                    <div>Facebook</div>
                </div>
                <div  class=" text-center  my-1">
                    <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $actual_link ?>"><img src="./img/icon/linkedin-share.png" alt="Linkedin WebsiteOri"></a>
                    <div>Linkedin</div>
                </div>
                <div class="text-center  my-1">
                    <img class="link-img" src="./img/icon/link-share.png" alt="Link Share WebsiteOri">
                    <div>CopyLink</div>
                </div>
            </div>
        </div>
        <!-- </ modal -->
    </div>
    </div>
    <div class="container-fluid no-gutters">
        <div class="row justify-content-center padding-section">
            <section class="view-article py-5 col-xl-9 col-md-10 col-sm-11 col-12">
                <div class="header">
                    <h1 class="hiddenkeyword"><?= $article["article_title"] ?></h1>
                    <div class="title"><?= $article["article_visibletitle"] ?></div>
                    <div class="author">By <b><?= $author["author_fullname"] ?></b></div>
                    <div class="d-flex flex-direction-row justify-content-between flex-wrap">
                        <div class="d-flex flex-direction-row align-items-center mb-2 flex-wrap">
                            <div class="date mr-4"><?='';
                            $date = date_format(date_create($article['article_created_time']), "d");
                            $month = findMonthById(date_format(date_create($article['article_created_time']), "m"));
                            $year = date_format(date_create($article['article_created_time']), "Y");
                            echo $date .' '. $month .' '. $year;
                            ?></div>
                            <div class="category" style="color:<?= $category['category_color'] ?>; font-size: 1.5rem"><?= $category["category_name"] ?></div>
                            <div class="views-warpper">
                                <img style="margin-left: 1.5rem;" width='30px' src="./img/icon/eye.svg" alt="">
                                <span><?=  $article['article_views'] ?></span>
                            </div>
                        </div>
                        <button type="button" id="myModal" class="btn" data-toggle="modal" data-target="#exampleModal">
                            <img class="share-btn" src="./img/icon/share.svg" alt="Share Artikel WebsiteOri">
                        </button>
                    </div>
                    <hr>
                    <div class="img-cont mb-3">
                        <img class="w-100" src="./img/article/<?= $article['article_image'] ?>" alt="<?= $article["article_title"] ?>">
                    </div>
                </div>
                <div class="table-content">
                    <div class="title">Daftar Isi</div>
                    <div class="list">
                    </div>
                </div>
                <div class="content w-100">
                    <?= $article["article_content"] ?>
                </div>
                <div class="tags my-5">
                    <span>Tags:</span>
                    <span class="tags-cont row p-2 pl-3">

                    </span>
                </div>
                <a href="https://websiteori.com/"><img class="w-100 border" src="./img/iklan/websiteori.png" alt="websiteori"></a>
            </section>
        </div>
    </div>
    
    <section class="kategori artikels mb-5 padding-section">
        <div class="header mb-5"> 
            <a href="index.php">
                Mungkin Anda Suka
            </a>
            <hr>
        </div>
        <div class="row">
            <?php foreach (array_slice($random_articles, 0, 3) as $article) : ?>
            <div class="col-md-4 col-12 artikel">
                <div class="img-cont mb-2 overflow-hidden">
                    <img class="w-100 lazy" data-src="./img/article/<?= $article['article_image'] ?>" alt="WebsiteOri">
                </div>
                <div class="title mb-2">
                    <a href="artikel/<?= $article['article_slug'] ?>"><?= $article['article_visibletitle'] ?></a>
                </div>
                <div class="date mb-2">
                    <?= date_format(date_create($article['article_created_time']), "d F Y") ?>
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
     </section>

    <!-- Footer -->
    <?php include "config/footer.php" ?>
    <!-- </Footer> -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/blog.js?v=<?= $version ?>"></script>
    <script src="./js/viewArticle.js?v=<?= $version ?>"></script>
</body>

</html>