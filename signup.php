
<?php include "config/head.php"; ?>
<?php

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}


$username = $password = $email ="";
$username_err = $password_err = $email_err ="";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // empty validations
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $number = '@[0-9]@';
    $length = strlen ($_POST["username"]);  
    $stmt = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $stmt->execute([$_POST["email"]]);
    $checkUnique = $stmt->fetch();
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else if($length < 3){
        $username_err = "Please enter minimum 3 characters.";
    } else {
        $username = trim($_POST["username"]);
    }
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $email_err = "Please enter a valid email.";
    } else if($checkUnique){
        $email_err = "Email already exists.";
    } 
    else {
        $email = trim($_POST["email"]);
    }
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else if(strlen($_POST["password"]) < 8 || !preg_match('@[0-9]@', $_POST["password"])){
        $password_err = "Password must be at least 8 characters in length and must contain at least one number.";
    } else {
        $password = trim($_POST["password"]);
    }
    

    if (empty($username_err) && empty($password_err) && empty($email_err)){

        // filter data yang diinputkan
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        // enkripsi password
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


        // menyiapkan query
        $sql = "INSERT INTO users (username, email, password) 
                VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);

        // bind parameter ke query
        $params = array(
            ":username" => $username,
            ":password" => $password,
            ":email" => $email
        );

        // eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);

        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
        if($saved) header("Location: login.php");
        unset($stmt);
    }
    unset($pdo);
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>

     <!-- Required meta tags -->
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/logo-tolisfresh_blog.png" sizes="32x32" type="image/png">

    <!-- Bootstrap, FontAwesome, Custom Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <title>Sign Up</title>

</head>

<body class="d-flex flex-column h-100 bg-light">
    
    <!-- Main -->
    <main class="main h-100">

        <!-- Latest Articles -->
        <div class="section jumbotron mb-0 h-100">
            <!-- container -->
            <div class="container d-flex flex-column justify-content-center align-items-center h-100">

                <div class="wrapper my-0 pt-3 bg-white text-center" style="min-width: 300px!important;">
                    <a href="index.php"><img src="img/logo/logo.png" alt="Artikel TolisFresh" style="height: 50px;"></a>
                </div>

                <!-- row -->
                <div class="wrapper bg-white rounded px-4 py-4" style="width: 300px!important;">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?= $username_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control <?= (!empty($email_err)) ? 'is-invalid' : ''; ?>" type="email" name="email" />
                            <span class="invalid-feedback"><?= $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>" />
                            <span class="invalid-feedback"><?= $password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Register"/>
                        </div>
                        <!-- <?php
                            echo $password_err;
                            ?> -->
                    </form>
                </div>

                <!-- /row -->

            </div>
            <!-- /container -->
        </div>


    </main><!-- </Main> -->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>