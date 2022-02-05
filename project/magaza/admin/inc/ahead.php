<?php
    include "../lib/db.php";
    session_start();
    ob_start();

    if($_SESSION["Kullanici"]  && $_SESSION["yetki"] == 1){
        
    }
    else if($_SESSION["Kullanici"]  && $_SESSION["yetki"] == 0){
        header("location:../index.php");
    }
    else{
        header("location:../index.php");
    }
    
?>


<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $sayfa ?></title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="../image/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../image/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../image/favicon/favicon-16x16.png">
        <link rel="manifest" href="../image/favicon/site.webmanifest">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            <a class="navbar-brand ps-3" href="index.php">Antique Ranch</a>

            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Ara..." aria-label="Ara..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Çıkış</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <div class="sb-sidenav-menu-heading">Yönetim</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Yönetim Paneli
                            </a>


                            <div class="sb-sidenav-menu-heading">Tanıtım sitesi</div>
                            <a class="nav-link collapsed <?= $sayfa=="Hakkında Metin"?"active":"" ?> " href="#" data-bs-toggle="collapse" data-bs-target="#hakkinda" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Hakkında
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="hakkinda" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Hakkında Metin'?'active':'' ?>" href="thakkinda.php">Hakkında Metin</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed <?= $sayfa=="Mağaza Metin"?"active":"" ?> <?= $sayfa=="Mağaza Resim"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#magaza" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Mağaza
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="magaza" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Mağaza Metin'?'active':'' ?>" href="tmagaza.php">Mağaza Metin</a>
                                    <a class="nav-link <?= $sayfa=='Mağaza Resim'?'active':'' ?>" href="tmagaza_img.php">Mağaza Resim</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed <?= $sayfa=="Atölye"?"active":""?><?= $sayfa=="Atölye Resim"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#atolye" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Atölye
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="atolye" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Atölye'?'active':'' ?>" href="tatolye.php">Atölye Metin</a>
                                    <a class="nav-link <?= $sayfa=='Atölye Resim'?'active':'' ?>" href="tatolye_img.php">Atölye Resim</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed <?= $sayfa=="Depo"?"active":"" ?> <?= $sayfa=="Depo Resim"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#depo" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Depo
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="depo" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Depo'?'active':'' ?>" href="tdepo.php">Depo Metin</a>
                                    <a class="nav-link <?= $sayfa=='Depo Resim'?'active':'' ?>" href="tdepo_img.php">Depo Resim</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed <?= $sayfa=="Tiletişim"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#tiletisim" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                İletişim
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="tiletisim" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Tiletişim'?'active':'' ?>" href="tiletisim.php">İletişim</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Mağaza Sayfalar</div>
                            <a class="nav-link collapsed <?= $sayfa=="Anasayfa"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Anasayfa
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="Anasayfa"?"active":"" ?>" href="anasayfa.php">Anasayfa</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed <?= $sayfa=="Mutfak"?"active":""?> <?= $sayfa=="Obje"?"active":""?> <?=$sayfa=="Keten"?"active":""?> <?=$sayfa=="İpek"?"active":""?> " href="#" data-bs-toggle="collapse" data-bs-target="#urun" aria-expanded="false" aria-controls="urun">
                            
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Ürünler
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="urun" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Mutfak'?'active':'' ?>" href="mutfakk.php">Mutfak</a>
                                </nav>
                            </div>
                            <div class="collapse" id="urun" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="Obje"?"active":"" ?>" href="obje.php">Obje</a>
                                </nav>
                            </div>      
                            <div class="collapse" id="urun" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="İpek"?"active":"" ?>" href="ipek.php">İpek</a>
                                </nav>
                            </div> 
                            <div class="collapse" id="urun" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="Keten"?"active":"" ?>" href="keten.php">Keten</a>
                                </nav>
                            </div> 
                            <a class="nav-link collapsed <?= $sayfa=="İletişim"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#iletisim" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                İletişim
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="iletisim" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="İletişim"?"active":"" ?>" href="iletisim.php">İletişim</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Diğer</div>   
                            <a class="nav-link collapsed <?= $sayfa=="Kullanıcılar"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#kullanici" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Kullanıcılar
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="kullanici" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="Kullanıcılar"?"active":"" ?>" href="kullanici.php">Kullanıcılar</a>
                                </nav>
                            </div>                   
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Giriş Yapan:</div>
                    <?php 
                    include '../lib/setting.php';   
                        if(isset($_SESSION['Kullanici'])){
                            echo $kullaniciadi ." ". $kullanicisoyad;
                        }


                    ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                