<nav class="d-flex flex-direction-row justify-content-between align-items-center padding-section py-1 nav-down">
    <img src="./img/logo/logo-tolisfresh_blog.png" alt="">
    <img class="menu-icon" src="./img/icon/menu.png" alt="">
    <div class=" menu-cont">
      <li class="ml-3"><a href="index.php">Home</a></li>
      <li class="ml-3"><a href="https://tolisfresh.com/">Produk</a></li>
      <li class="ml-3"><a href="/">Blog</a></li>
      <li class="ml-3"><a href="https://tolisfresh.com/tentang-kami.php">Tentang</a></li>
      <li class="ml-3"><a href="#">Kontak</a></li>
      <a class="button-green py-2 px-4 ml-3" href="<?= ($loggedin) ? 'logout.php' : 'login.php'; ?>">
          <?= ($loggedin) ? 'Keluar' : 'Masuk'; ?>
      </a>
    </div>
</nav>
