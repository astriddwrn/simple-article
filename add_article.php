<!-- Include Head -->
<?php include "config/head.php"; ?>
<?php
$stmt = $conn->prepare("SELECT category_id, category_name FROM category");
$stmt->execute();
$categories = $stmt->fetchAll();

$stmt = $conn->prepare("SELECT author_id, author_fullname FROM author");
$stmt->execute();
$authors = $stmt->fetchAll();

?>

<!-- JS TextEditor -->
<script src="//cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<link rel="stylesheet" href="./css/dasbor.css">
<title>Add Article</title>

</head>

<body>

    <!-- Header -->
    <?php include "config/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">
        <div class="dasbor w-100 my-3">Add Article</div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form class="insert-form" action="config/insert.php?type=article" method="POST" enctype="multipart/form-data">
                        <div class="form-group mt-5">
                            <label for="arTitle">Judul yang Invisible (judul yang tidak akan terlihat oleh pembaca)</label>
                            <input type="text" class="form-control" name="arTitle" id="arTitle">
                            <div class="count"><span>0</span>/60</div>
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label for="">Judul yang Visible (judul yang akan terlihat oleh pembaca)</label>
                            <input type="text" class="form-control" name="arVisibletitle" id="arVisibletitle"></input>
                            <div class="count"><span>0</span>/100</div>
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label for="arDescription">Meta Deskripsi</label>
                            <input type="text" class="form-control" name="arDescription" id="arDescription">
                            <div class="count"><span>0</span>/160</div>
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label for="arContent">Konten</label>
                            <textarea class="form-control" name="arContent" id="arContent" rows="3" required></textarea>
                        </div>

                        <div class="form-group mt-5">
                            <label for="arImage">Foto Thumbnail</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="arImage" id="arImage" onchange="readURL(this);">
                                <label class="custom-file-label" for="arImage">Choose file</label>
                            </div>
                            <img style="max-width:300px;" id="preview" src="" alt="your image" />
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label for="">Keywords</label>
                            <input type="text" class="form-control" name="arKeyword" id="arKeyword"></input>
                            <div class="error-msg"></div>
                        </div>

                        <div class="form-group mt-5">
                            <label for="arCategory">Kategori</label>
                            <select class="custom-select" name="arCategory" id="arCategory" required>
                                <option disabled>-- Select Category --</option>

                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="form-group mt-5">
                            <label for="arAuthor">Penulis</label>
                            <select class="custom-select" name="arAuthor" id="arAuthor" required>
                                <option disabled>-- Select Author --</option>

                                <?php foreach ($authors as $author) : ?>
                                    <option value="<?= $author['author_id'] ?>"><?= $author['author_fullname'] ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="text-center my-5">
                            <div name="submit" class="btn btn-success btn-lg w-25 mt-3">Submit</div>
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