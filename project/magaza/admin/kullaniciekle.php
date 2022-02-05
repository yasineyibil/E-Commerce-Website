<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Kullanıcı Ekle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */




    
    @require "verot.net.php";
    require "config.php";
    if ($_POST) {
            DB::insert("INSERT INTO kullanici(ad, soyad, mail, password, yetki) VALUES(?,?,?,?,?)", array(
                $_POST['ad'],
                $_POST['soyad'],
                $_POST['mail'],
                $_POST['password'],
                $_POST['yetki'],
            ));
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Eklediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
            if(value.isConfirmed){window.location.href='kullanici.php?success=1'}})</script>";
        }



    
?>

 
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?=$sayfa?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Kullanıcılar / <?=$sayfa?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label for="">Ad</label>
                            <input type="text" name="ad" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Soyad</label>
                            <input type="text" name="soyad" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta</label>
                            <input type="email" name="mail" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Şifre</label>
                            <input type="password" name="password" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Yetki</label>
                            <input type="text" name="yetki" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <input type="submit" value="Ekle" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
    include "inc/footer.php";
?>
      