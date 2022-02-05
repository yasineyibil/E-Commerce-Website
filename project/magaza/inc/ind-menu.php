<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="font/font.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
  <link rel="manifest" href="image/favicon/site.webmanifest">
  <title><?= $sayfa ?></title>
</head>

<body>

  <!-- ----------- MENU START ------------ -->
  <header class="header">
    <a href="index.php" class="logo">
      <img src="image/logo.png" class="logoimg" alt="Antique ranch">
      <h3 id="<?php if ($sayfa != 'Online Mağaza') {
                echo 'logorenkk';
              } else {
                echo 'logorenk';
              } ?>">antique ranch</h3>
    </a>
    <nav class="navbar">
      <div id="nav-close" class="fas fa-times"></div>
      <a href="urunler.php">Ürünler</a>
      <a href="iletisim.php">Iletisim</a>
      <a href="../Antique-Rach/index.php">depo & dükkan</a>
    </nav>
    <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>

      <?php

      ob_start();
      session_start();
      include 'lib/setting.php';

      if (isset($_SESSION['Kullanici'])) {
      ?>

        <div class="btn-group">
          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>
          </button>
          <ul class="dropdown-menu">
            <li style="margin-left:-10px;"><a class="dropdown-item" href="#">

                <?php
                if (isset($_SESSION['Kullanici'])) {
                  echo $kullaniciadi . " " . $kullanicisoyad;
                }
                ?>

              </a></li>
            <li style="margin-left:-10px;">
              <hr class="dropdown-divider">
            </li>
            <li style="margin-left:-10px;"><a class="dropdown-item" href="logout.php">Çıkış Yap</a></li>
          </ul>
        </div>
        <a style="position:relative; top:8px;" href="sepet.php" class="fas fa-shopping-cart"></a>
        <div style="position:relative; top:8px;" id="search-btn" class="fas fa-search"></div>

      <?php
      } else {
      ?>

        <a href="kyt-ol.php" class="fas fa-user"></a>
        <a href="sepet.php" class="fas fa-shopping-cart"></a>
        <div id="search-btn" class="fas fa-search"></div>

      <?php
      }
      ?>
    </div>
  </header>
  <div class="search-form">
    <div id="close-search" class="fas fa-times"></div>
    <form action="" method="get">
      <input type="search" name="ara" placeholder="Ara..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
    </form>
  </div>

  <!-- ----------- MENU END ------------ -->