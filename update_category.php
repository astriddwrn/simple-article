<!-- Include Head -->
<?php include "config/head.php"; ?>
<?php

$category_id = $_GET["id"];

// Get category Data to display
$stmt = $conn->prepare("SELECT * FROM category WHERE category_id = ?");
$stmt->execute([$category_id]);
$category = $stmt->fetch();

?>
<link rel="stylesheet" href="./css/dasbor.css">
<title>Update Category</title>
</head>

<body>

    <!-- Header -->
    <?php include "config/header.php" ?>


    <!-- Main -->
    <main role="main" class="main">

    <div class="dasbor w-100 my-3">Update Category</div>

        <div class="container">

            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="config/update.php?type=category&id=<?= $category_id ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group mt-5">
                            <label for="text-weight-bold">Category Name</label>
                            <input type="text" class="form-control" name="catName" id="catName" value="<?= $category["category_name"] ?>">
                        </div>

                        <div class="form-group mt-5">
                            <label for="text-weight-bold">Category Color</label><br>
                            <input type="color" id="catColor" name="catColor" value="<?= $category["category_color"] ?>">
                        </div>


                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success btn-lg w-25">Update</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </main>

    <!-- Footer -->
    <!-- <?php include "config/footer.php" ?> -->


</body>

</html>