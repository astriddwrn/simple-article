<!-- Include Head -->
<?php include "config/head.php"; ?>
<?php

$author_id = $_GET["id"];

// Get author Data to display
$stmt = $conn->prepare("SELECT * FROM author WHERE author_id = ?");
$stmt->execute([$author_id]);
$author = $stmt->fetch();

?>
<link rel="stylesheet" href="./css/dasbor.css">
<title>Update Author</title>
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
                    <form action="config/update.php?type=author&id=<?= $author_id?>" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="authName">Full Name</label>
                            <input type="text" class="form-control" name="authName" id="authName" value="<?= $author['author_fullname'] ?>">
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" name="update" class="btn btn-success btn-lg w-25">Submit</button>
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