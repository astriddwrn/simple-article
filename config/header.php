<nav class="d-flex flex-direction-row justify-content-between align-items-center padding-section py-1 nav-down">
  <a href="https://websiteori.com/"><img style="width:150px; margin: 5px 0px;" src="./img/logo/logo.png" alt="Logo WebsiteOri Digital Marketing"></a>
  <img  class="menu-icon" src="./img/icon/menu.svg" alt="WebsiteOri">
  <div class=" menu-cont">
    <li class="ml-3"><a href="https://websiteori.com/">Beranda</a></li>
    <li class="ml-3"><a href="https://tolisfresh.com/">Produk</a></li>
    <li class="ml-3"><a href="">Blog</a></li>
    <li class="ml-3"><a href="https://websiteori.com/contoh-website/#demoCorporate">Tentang</a></li>
    <li class="ml-3"><a href="https://websiteori.com/kontak">Kontak</a></li>
    <?php if($loggedin && basename($_SERVER['PHP_SELF'])=='dasbor.php'):  ?>
      <a class="button-green py-2 px-4 ml-3" href="logout.php">Keluar</a>
    <?php elseif($loggedin && basename($_SERVER['PHP_SELF'])!='dasbor.php'):  ?> 
      <a class="button-green py-2 px-4 ml-3" href="dasbor.php">Dasbor</a>
      <?php endif ?>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="./js/navbar.js"></script>
