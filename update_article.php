<!-- Include Head -->
<?php include "config/head.php"; ?>
<?php

$article_id = $_GET["id"];

// Get article Data to display
$stmt = $conn->prepare("SELECT * FROM article WHERE article_id = ?");
$stmt->execute([$article_id]);
$article = $stmt->fetch();

// Get categories Data to display
$stmt = $conn->prepare("SELECT category_id, category_name FROM category");
$stmt->execute();
$categories = $stmt->fetchAll();

// Get authors Data to display
$stmt = $conn->prepare("SELECT author_id, author_fullname FROM author");
$stmt->execute();
$authors = $stmt->fetchAll();
?>

<!-- JS TextEditor -->
<script src="//cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<link rel="stylesheet" href="./css/dasbor.css">
<title>Update Article</title>
</head>

<body>
    <!-- Header -->
    <?php include "config/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

    <div class="dasbor w-100 my-3">Update Article</div>

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 mb-4 ">
                    <!-- Form -->
                    <form class="w-100 update-form" action="config/update.php?type=article&id=<?= $article_id ?>&img=<?= $article["article_image"] ?>" method="POST" enctype="multipart/form-data">

                        <div class="form-group mt-5">
                            <label class="text-weight-bold" for="arTitle">Judul yang Invisible (judul yang tidak akan terlihat oleh pembaca)</label>
                            <input type="text" class="form-control" name="arTitle" id="arTitle" value="<?= $article["article_title"] ?>">
                            <div class="count"><span>0</span>/60</div>
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label for="">Judul yang Visible (judul yang akan terlihat oleh pembaca)</label>
                            <input type="text" class="form-control" name="arVisibletitle" id="arVisibletitle" value="<?= $article["article_visibletitle"] ?>"></input>
                            <div class="count"><span>0</span>/100</div>
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label class="text-weight-bold" for="arDescription">Meta Deskripsi</label>
                            <input type="text" class="form-control" name="arDescription" id="arDescription" value="<?= $article["article_description"] ?>">
                            <div class="count"><span>0</span>/160</div>
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label class="text-weight-bold" for="arContent">Konten</label>
                            <textarea class="form-control" name="arContent" id="arContent" rows="3">
                            <?= $article["article_content"] ?>
                            </textarea>
                        </div>

                        <div class="form-group mt-5">
                            <label class="text-weight-bold" for="UploadImage">Foto Thumbnail</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="arImage" id="arImage" onchange="readURL(this);">
                                <label class="custom-file-label" for="UploadImage"> <?= $article['article_image'] ?></label>
                            </div>
                            <div class="my-2" style="width: 300px;">
                                <img class="w-100 h-auto" id="preview" src="img/article/<?= $article["article_image"] ?>" alt="">
                            </div>
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label class="text-weight-bold">Keywords</label>
                            <input type="text" class="form-control" name="arKeyword" id="arKeyword" value="<?= $article["article_keyword"] ?>">
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label class="text-weight-bold" for="arCategory">Kategori</label>
                            <select class="custom-select" name="arCategory" id="arCategory">
                                <option disabled>-- Pilih Kategori --</option>

                                <?php foreach ($categories as $category) : ?>
                                    <?php if ($article['id_categorie'] == $category['category_id']) : ?>
                                        <option value="<?= $category['category_id'] ?>" selected><?= $category['category_name'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group mt-5">
                            <label class="text-weight-bold" for="arauthor">Penulis</label>
                            <select class="custom-select" name="arAuthor" id="arAuthor">
                                <option disabled>-- Pilih Penulis --</option>

                                <?php foreach ($authors as $author) : ?>
                                    <?php if ($article['id_author'] == $author['author_id']) : ?>
                                        <option value="<?= $author['author_id'] ?>" selected><?= $author['author_fullname'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $author['author_id'] ?>"><?= $author['author_fullname'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="text-center my-5">
                            <div class="btn btn-success btn-lg w-100 mt-3">Update</div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <!-- <?php include "config/footer.php" ?> -->

    <!-- Text Editor Script -->
    <script>
        CKEDITOR.replace('arContent');
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="./js/jquery-3.4.1.slim.min.js"></script>
    <script src="./js/add_article.js"></script>

</body>

</html>