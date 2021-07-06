<?php require "db.php"; ?>

<?php
// Initialize the session
session_start();
$loggedin = false;

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
   $loggedin = true;
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/flogo.png" sizes="32x32" type="image/png">

    <!-- Bootstrap, FontAwesome, Custom Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- <link rel="stylesheet" href="css/footer.css">    -->
    <!-- <link type="text/css" rel="stylesheet" href="css/style.css" /> -->
    <title>TolisFresh Blog | Inspirasi Dapur Anda</title>
		
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Belanja online kebutuhan dapur segar dan murah setiap hari. Pilihan lengkap, mulai dari sayur, buah, daging, ayam, sembako, dan kebutuhan dapur lainnya. Belanja di TolisFresh lebih praktis, tepat waktu, dan gratis ongkir! 100% Fresh." />
	<meta name="keywords" content="Sayur Online, Buah Online, Sembako Online, Ayam Online, Ikan Online, Daging Sapi Online, Supplier Online, Pasar Online, Supplier Ayam Online, Supplier Sayur Online, Supplier Daging Online, Supplier Sayur Tangerang, Supplier Sayur Jakarta, Supplier Daging Jakarta, Supplier Buah Tangerang, Supplier Buah Jakarta, Ayam Murah Tangerang, Ayam Murah Jakarta, Sayur Murah Tangerang, Sayur Murah Jakarta, Buah Murah Tangerang, Buah Murah Jakarta, Sembako Murah Tangerang, Sembako Murah Jakarta" />
    