<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="İletişim Güncelle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */
    $sorgu=$db->prepare("select * from iletisim where id=:id");
    $sorgu->execute(['id'=>(int)$_GET["id"]]);
    $sonuc=$sorgu->fetch();
    

    
    // veri güncelleme

    if($_POST){
        $guncellesorgu=$db->prepare("UPDATE iletisim SET 
        baslik=:baslik,
        ust_txt=:ust_txt,
        txt=:txt,
        tel=:tel,
        email=:email,
        email_url=:email_url
        WHERE id=:id");
        
         $guncelle=$guncellesorgu->execute([
            'baslik'=>$_POST["baslik"],
            'ust_txt'=>$_POST["ust_txt"],
            'txt'=>$_POST["txt"],
            'tel'=>$_POST["tel"],
            'email'=>$_POST["email"],
            'email_url'=>$_POST["email_url"],
            'id'=>(int)$_GET["id"]
         ]);
    }

         if(@$guncelle){
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Güncellediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                if(value.isConfirmed){window.location.href='iletisim.php'}})</script>";
        }
    
?>


    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?=$sayfa?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">İletişim / <?=$sayfa?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                <form action="" method="post">
                        <div class="form-group" >
                            <label for="">Başlık</label>
                            <input type="text" name="baslik" required class="form-control" value="<?= $sonuc["baslik"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Üst Metin</label>
                            <input type="text" name="ust_txt" required class="form-control" value="<?= $sonuc["ust_txt"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin</label>
                            <input type="text" name="txt" required class="form-control" value="<?= $sonuc["txt"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Telefon</label>
                            <input type="text" maxlength="11" name="tel" required class="form-control" value="<?= $sonuc["tel"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta</label>
                            <input type="text" name="email" required class="form-control" value="<?= $sonuc["email"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta Uzantı</label>
                            <input type="text" name="email_url" required class="form-control" value="<?= $sonuc["email_url"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <input type="submit" value="guncelle" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
    include "inc/footer.php";
?>
      