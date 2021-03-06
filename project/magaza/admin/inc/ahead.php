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
                        <li><a class="dropdown-item" href="logout.php">????k????</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <div class="sb-sidenav-menu-heading">Y??netim</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Y??netim Paneli
                            </a>


                            <div class="sb-sidenav-menu-heading">Tan??t??m sitesi</div>
                            <a class="nav-link collapsed <?= $sayfa=="Hakk??nda Metin"?"active":"" ?> " href="#" data-bs-toggle="collapse" data-bs-target="#hakkinda" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Hakk??nda
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="hakkinda" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Hakk??nda Metin'?'active':'' ?>" href="thakkinda.php">Hakk??nda Metin</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed <?= $sayfa=="Ma??aza Metin"?"active":"" ?> <?= $sayfa=="Ma??aza Resim"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#magaza" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Ma??aza
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="magaza" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Ma??aza Metin'?'active':'' ?>" href="tmagaza.php">Ma??aza Metin</a>
                                    <a class="nav-link <?= $sayfa=='Ma??aza Resim'?'active':'' ?>" href="tmagaza_img.php">Ma??aza Resim</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed <?= $sayfa=="At??lye"?"active":""?><?= $sayfa=="At??lye Resim"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#atolye" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                At??lye
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="atolye" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='At??lye'?'active':'' ?>" href="tatolye.php">At??lye Metin</a>
                                    <a class="nav-link <?= $sayfa=='At??lye Resim'?'active':'' ?>" href="tatolye_img.php">At??lye Resim</a>
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


                            <a class="nav-link collapsed <?= $sayfa=="Tileti??im"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#tiletisim" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                ??leti??im
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="tiletisim" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=='Tileti??im'?'active':'' ?>" href="tiletisim.php">??leti??im</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Ma??aza Sayfalar</div>
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
                            <a class="nav-link collapsed <?= $sayfa=="Mutfak"?"active":""?> <?= $sayfa=="Obje"?"active":""?> <?=$sayfa=="Keten"?"active":""?> <?=$sayfa=="??pek"?"active":""?> " href="#" data-bs-toggle="collapse" data-bs-target="#urun" aria-expanded="false" aria-controls="urun">
                            
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                ??r??nler
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
                                    <a class="nav-link <?= $sayfa=="??pek"?"active":"" ?>" href="ipek.php">??pek</a>
                                </nav>
                            </div> 
                            <div class="collapse" id="urun" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="Keten"?"active":"" ?>" href="keten.php">Keten</a>
                                </nav>
                            </div> 
                            <a class="nav-link collapsed <?= $sayfa=="??leti??im"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#iletisim" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                ??leti??im
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="iletisim" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="??leti??im"?"active":"" ?>" href="iletisim.php">??leti??im</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Di??er</div>   
                            <a class="nav-link collapsed <?= $sayfa=="Kullan??c??lar"?"active":"" ?>" href="#" data-bs-toggle="collapse" data-bs-target="#kullanici" aria-expanded="false" aria-controls="urun">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Kullan??c??lar
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="kullanici" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= $sayfa=="Kullan??c??lar"?"active":"" ?>" href="kullanici.php">Kullan??c??lar</a>
                                </nav>
                            </div>                   
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Giri?? Yapan:</div>
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
                