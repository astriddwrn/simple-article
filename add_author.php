<!-- Include Head -->
<?php include "config/head.php"; ?>

<link rel="stylesheet" href="./css/dasbor.css">
<title>Add Author</title>
</head>

<body>

    <!-- Header -->
    <?php include "config/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

    <div class="dasbor w-100 my-3">Add Author</div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="config/insert.php?type=author" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="authName">Full Name</label>
                            <input type="text" class="form-control" name="authName" id="authName">
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Submit</button>
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