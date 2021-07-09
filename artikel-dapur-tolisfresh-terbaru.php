<?php include "assest/head.php"; ?>

<?php
$article_id = $_GET['id'];

// Get Article Info
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN `author` ON `article`.id_author = `author`.author_id  WHERE `article_id` = ?");
$stmt->execute([$article_id]);
$article = $stmt->fetch();

// Get Category of article
$stmt = $conn->prepare("SELECT * FROM `category` WHERE `category_id` = ?");
$stmt->execute([$article["id_categorie"]]);
$category = $stmt->fetch();

// Get Author's articles
$stmt = $conn->prepare("SELECT article_title, article_id FROM `article` WHERE id_author = ? LIMIT 4");
$stmt->execute([$article["id_author"]]);
$articles = $stmt->fetchAll();

// Get Comments
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN `comment` WHERE `article`.`article_id`= `comment`.`id_article` AND `article`.`article_id` = ? ORDER BY comment_id DESC");
$stmt->execute([$article_id]);
$comments = $stmt->fetchAll();
?>
      <!-- FAVICON -->
      <link rel="shortcut icon" href="https://infobus.co.id/assets/images/favicon.png">

      <!-- CSS:: FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

      <!-- CSS:: MAIN -->
      <link rel="stylesheet" type="text/css" href="https://infobus.co.id/assets/css/main.css">
      <link rel="stylesheet" type="text/css" id="r-color-roller" href="https://infobus.co.id/assets/color-files/color-08.css"></head>
<style>
.partikel {
	text-indent: 30px;
	text-align: justify;
	text-justify: inter-word;
}

@media all {
	a,
	i,
	table,
	tbody,
	thead,
	tr,
	th,
	td {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}
	table {
		border-collapse: collapse;
		border-spacing: 0;
	}
	*,
	*::before,
	*::after {
		box-sizing: inherit;
		-webkit-font-smoothing: antialiased;
	}
	i {
		font-style: italic;
	}
	a,
	a:visited,
	a:focus {
		text-decoration: none;
		outline: 0;
	}
	a:hover {
		text-decoration: underline;
	}
	[class^="icon-"]:before {
		font-family: "mfn-icons";
		font-style: normal;
		font-weight: 400;
		speak: none;
		display: inline-block;
		text-decoration: none!important;
		width: 1em;
		margin-right: .2em;
		text-align: center;
		font-variant: normal;
		text-transform: none;
		line-height: 1em;
		margin-left: .2em;
	}
	.icon-phone:before {
		content: '\e8f4';
	}
}

@media all {
	.no-shadows table th,
	.no-shadows table tr:first-child td {
		box-shadow: 0 0 0 transparent;
		-webkit-box-shadow: 0 0 0 transparent;
	}
}

@media all {
	table {
		width: 100%;
		margin-bottom: 15px;
		border-collapse: collapse;
		border-spacing: 0;
		-webkit-border-radius: 5px;
		border-radius: 5px;
	}
	table th,
	table td {
		padding: 10px;
		text-align: center;
		border-width: 1px;
		border-style: solid;
		vertical-align: middle;
	}
	table th {
		font-weight: 700;
		background: #f9f9f9;
		box-shadow: inset 0px 4px 3px -2px rgba(0, 0, 0, .04);
	}
	table tr:first-child td {
		box-shadow: inset 0px 4px 3px -2px rgba(0, 0, 0, .06);
	}
	table tr:nth-child(2n) td {
		background: rgba(0, 0, 0, 0.01);
	}
	::-moz-selection {
		color: #fff;
	}
	::selection {
		color: #fff;
	}
	table th,
	table td {
		border-color: rgba(0, 0, 0, .08);
	}
	table th {
		color: #444;
	}
	.style-simple table:not(.recaptchatable) th {
		background: none;
	}
	.style-simple table:not(.recaptchatable) tr:first-child td {
		background: none;
	}
	.style-simple table:not(.recaptchatable) th,
	.style-simple table td {
		border-width: 0 1px 1px 0;
	}
	.style-simple table:not(.recaptchatable) tr td:last-child,
	.style-simple table tr th:last-child {
		border-right: 0;
	}
	.style-simple table:not(.recaptchatable) tr:nth-child(2n) td {
		background: none;
	}
}

a {
	color: #1572b7;
}

a:hover {
	color: #4ba3e6;
}

*::-moz-selection {
	background-color: #f9ba60;
	color: black;
}

*::selection {
	background-color: #f9ba60;
	color: black;
}

::-webkit-input-placeholder {
	color: #494949;
}

::-moz-placeholder {
	color: #494949;
}

:-ms-input-placeholder {
	color: #494949;
}

:focus::-webkit-input-placeholder {
	color: #494949;
}

:focus::-moz-placeholder {
	color: #494949;
}
</style>

<body>
	<div class="r-wrapper">
		<header>
			<div class="r-header r-header-inner r-header-strip-01">
				<div class="r-header-strip r-header-strip-01">
					              <div class="container">
                <div class="row clearfix">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="r-logo">
                      <a href="/" class="d-inline-block"><img src="https://infobus.co.id/assets/images/logo-infobus-3.png" class="img-fluid d-block" style="width: 170px;" alt=""></a>
                    </div>
                    <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12"> 
                    <div class="r-nav-section float-right">
                      <nav style="background: black; border-radius: 40px; padding: 0px 10px; margin-top: 10px;">
                      <ul>
                        <li><a href="https://infobus.co.id/index.php">Beranda</a></li>
                        <li><a href="https://infobus.co.id/tentang.php">Tentang</a></li>
                        <li><a href="https://infobus.co.id/harga.php">Harga</a></li>
                        <li><a href="https://infobus.co.id/gambar.php">Galeri</a></li>
                        <li><a href="https://infobus.co.id/info.php">Kontak</a></li>
                      </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>				</div>
				<div class="r-header-inner-banner">
					<div class="r-header-in-over">
						<h1><?= $article["article_title"] ?></h1>
						<div class="r-breadcrum">
							<ul>
								<li><a href="#">Jakarta</a></li>
								<li><span>Bandung</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="r-car-info-wrapper">
			<div class="container">
				<!-- Judul -->
				<div class="r-sec-head r-sec-head-left r-sec-head-line r-sec-head-r pt-0">
					<h2><?= $article["article_title"] ?></h2> </div>
				<!-- tutup judul -->
				<!-- Barisan Paragraf -->
				<div class="row clearfix mb-5 r-who-we-small">
					<div class="col-lg-6">
                        <?= $article["article_content"] ?>
						<br />
					</div>
					<div class="col-lg-6">
						<p>
							<a class="d-inline-block" href="#"><img src="https://infobus.co.id/assets/images/bus/rejeki-gemilang/bus-pariwisata-rejeki-gemilang.jpg" class="img-fluid d-block m-auto" alt="" /></a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9 col-md-8 col-sm-12">
                        <?= $article["article_contentn"] ?>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-12">
						<div class="r-product-testimonial-wrapper">
							<h4>Testimonials</h4>
							<div class="owl-carousel" id="productTestimonial">
								<div class="r-testimonial-box">"We know the difference is in the details and that’s why our car rental services, in the tourism and business."</div>
								<div class="r-testimonial-box">"We know the difference is in the details and that’s why our car rental services, in the tourism and business."</div>
								<div class="r-testimonial-box">"We know the difference is in the details and that’s why our car rental services, in the tourism and business."</div>
							</div>
						</div>
						<div class="r-product-discount" style="margin-bottom: 30px;"> <span class="r-discount">DISKON 5%</span>
							<p class="r-discount-content">Harga Special <strong>Sewa Bus.</strong></p>
						</div>
						<div class="r-product-testimonial-wrapper"> <span class="r-date">15 MEI 2021</span>
							<h4>Harga Sewa Bus Jakarta</h4> <a href="artikel.php" class="r-read-more">BACA ARTIKEL</a> </div>
						<div class="r-product-testimonial-wrapper"> <span class="r-date">15 MEI 2021</span>
							<h4>Harga Sewa Bus Jakarta</h4> <a href="artikel.php" class="r-read-more">BACA ARTIKEL</a> </div>
						<div class="r-product-discount" style="margin-bottom: 30px;"> <span class="r-discount">DISKON 5%</span>
							<p class="r-discount-content">Harga Special <strong>Sewa Bus.</strong></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /r-car-info -->
		<footer>
			<div class="r-footer">
				<div class="container">
					<div class="row clearfix" style="margin-bottom: 30px;">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="r-footer-block"> <img src="https://infobus.co.id/assets/images/logo-infobus-3.png" class="d-block img-fluid" alt="" />
								<p>InfoBus.co.id | Pusat informasi bus terlengkap dan terpercaya. Menampilkan pilihan informasi terbaik untuk memenuhi kebutuhan transportasi Anda.</p>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="r-footer-block">
								<div class="r-footer-widget r-footer-phone"> <span><i class="fa fa-phone"></i> Telepon 1</span>
									<h5>081289991919</h5> </div>
								<div class="r-footer-widget r-footer-nav">
									<h6>Tujuan keberangkatan</h6>
									<nav>
										<ul>
											<li><a href="https://infobus.co.id/scriptco/sewa-bus-hiba.php">Paket Sewa Bus Sekitar Jakarta</a></li>
											<li><a href="https://infobus.co.id/scriptco/sewa-bus-jakarta-jogja.php">Paket Sewa Bus Sekitar Bandung</a></li>
											<li><a href="https://infobus.co.id/scriptco/sewa-bus-jakarta-puncak.php">Paket Sewa Bus Sekitar Jakarta Puncak</a></li>
											<li><a href="https://infobus.co.id/scriptco/sewa-bus-jakarta-selatan.php">Paket Sewa Bus Sekitar Bogor</a></li>
											<li><a href="https://infobus.co.id/scriptco/sewa-bus-jakarta-timur.php">Paket Sewa Bus Sekitar Jawa</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="r-footer-block">
								<div class="r-footer-widget r-footer-phone"> <span><i class="fa fa-phone"></i> Telepon 2</span>
									<h5>085104425555</h5> </div>
								<div class="r-footer-widget r-footer-nav">
									<h6>Kunjungan Wisata</h6>
									<nav>
										<ul>
											<li><a href="https://infobus.co.id/scriptco/sewa-bus-jakarta.php">Wisata Daerah Jakarta</a></li>
											<li><a href="https://infobus.co.id/scriptco/sewa-bus-panorama.php">Wisata Daerah Bogor</a></li>
											<li><a href="https://infobus.co.id/scriptco/sewa-bus-white-horse.php">Wisata Daerah Lombok</a></li>
											<li><a href="#">Wisata Daerah Bali</a></li>
											<li><a href="#">Wisata Daerah Sumatra</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12 ftal">
							<div class="r-footer-block">
								<div class="r-footer-widget r-footer-map">
									<a href="https://goo.gl/maps/8kotnHXhPnDn7GhT7"> <img src="https://infobus.co.id/assets/images/icon-footer-map.png" alt="" class="icon" />Lokasi Kami</a>
								</div>
								<div class="r-footer-widget r-footer-nav">
									<h6>Informasi Lainnya</h6>
									<nav>
										<ul>
											<li><a href="#">Beranda</a></li>
											<li><a href="#">Tentang</a></li>
											<li><a href="#">Harga</a></li>
											<li><a href="#">Galeri</a></li>
											<li><a href="#">Kontak</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="r-to-top" class="r-to-top"><i class="fa fa-angle-up"></i></div>
	<!-- Lokas:: Lokasitujuan.JS -->
	<script src="https://infobus.co.id/assets/js/caridt.js"></script>
	<!-- Lokas:: Lokasitujuan.JS -->
	<script src="https://infobus.co.id/assets/js/selok.js"></script>
	<!-- WA:: Whatsapp.JS -->
	<script src="https://infobus.co.id/assets/js/wa.js"></script>
	<!-- JQUERY:: JQUERY.JS -->
	<script src="https://infobus.co.id/assets/js/jquery.min.js"></script>
	<!-- JQUERY:: APPEAR.JS -->
	<script src="https://infobus.co.id/assets/js/plugins/appear/appear.js"></script>
	<!-- JQUERY:: COUNTER.JS -->
	<script src="https://infobus.co.id/assets/js/plugins/counter/jquery.easing.min.js"></script>
	<script src="https://infobus.co.id/assets/js/plugins/counter/counter.min.js"></script>
	<!-- JQUERY:: BOOTSTRAP.JS -->
	<script src="https://infobus.co.id/assets/js/tether.min.js"></script>
	<script src="https://infobus.co.id/assets/js/bootstrap.min.js"></script>
	<!-- JQUERY:: PLUGINS -->
	<script src="https://infobus.co.id/assets/js/plugins/owl/owl.carousel.min.js"></script>
	<script src="https://infobus.co.id/assets/js/plugins/lightcase/lightcase.js"></script>
	<!-- JQUERY:: MAP -->
	<script src="https://infobus.co.id/assets/js/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK7lXLHQgaGdP3IvMPi1ej0B9JHUbcqB0&amp;callback=initMap"></script>
	<!-- JQUERY:: CUSTOM.JS -->
	<script src="https://infobus.co.id/assets/js/custom.js"></script>
</body>

</html>