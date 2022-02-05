<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Kullanıcı Güncelle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */
    $sorgu=$db->prepare("select * from kullanici where id=:id");
    $sorgu->execute(['id'=>(int)$_GET["id"]]);
    $sonuc=$sorgu->fetch();
    

    
    // veri güncelleme

    if($_POST){
        $guncellesorgu=$db->prepare("UPDATE kullanici SET 
        ad=:ad,
        soyad=:soyad,
        mail=:mail,
        password=:password,
        yetki=:yetki
        WHERE id=:id");
        
         $guncelle=$guncellesorgu->execute([
            'ad'=>$_POST["ad"],
            'soyad'=>$_POST["soyad"],
            'mail'=>$_POST["mail"],
            'password'=>$_POST["password"],
            'yetki'=>$_POST["yetki"],
            'id'=>(int)$_GET["id"]
         ]);
    }

         if(@$guncelle){
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Güncellediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                if(value.isConfirmed){window.location.href='kullanici.php'}})</script>";
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
                <form action="" method="post">
                        <div class="form-group" >
                            <label for="">Ad</label>
                            <input type="text" name="ad" required class="form-control" value="<?= $sonuc["ad"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Soyad</label>
                            <input type="text" name="soyad" required class="form-control" value="<?= $sonuc["soyad"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta</label>
                            <input type="text" name="mail" required class="form-control" value="<?= $sonuc["mail"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Şifre</label>
                            <input type="text" name="password" required class="form-control" value="<?= $sonuc["password"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Yetki</label>
                            <input type="text" name="yetki" required class="form-control" value="<?= $sonuc["yetki"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <input type="submit" value="güncelle" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
    include "inc/footer.php";
?>
      