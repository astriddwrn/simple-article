<!-- Include Head -->
<?php include "config/head.php"; ?>

<link rel="stylesheet" href="./css/dasbor.css">
<title>Add Category</title>
</head>

<body>

    <!-- Header -->
    <?php include "config/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

    <div class="dasbor w-100 my-3">Add Category</div>

        <div class="container">

            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="config/insert.php?type=category" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="catName">Category Name</label>
                            <input type="text" class="form-control" name="catName" id="catName">
                        </div>

                        <div class="form-group">
                            <label for="catColor">Category Color</label><br />
                            <input type="color" id="catColor" name="catColor" value="#0f88e1">
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>