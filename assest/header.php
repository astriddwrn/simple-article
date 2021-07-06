<header class="blog-header border-bottom shadow-sm bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img src="img/logo/logo-tolisfresh_blog.png" alt="Tolis Fresh Article" style="height: 50px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
         <?php if ($loggedin) : ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categories.php">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="article.php">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="author.php">Penulis</a>
          </li>
         <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="kategori-artikel.php">Artikel</a>
          </li>  
         <?php endif;  ?>
          <li class="nav-item">
            <a class="btn btn-outline-success" href="<?= ($loggedin) ? 'logout.php' : 'login.php'; ?>">
                <?= ($loggedin) ? 'Keluar' : 'Masuk'; ?>
            </a> 
          </li> 
        </ul>
      </div>
    </nav>    
</header>