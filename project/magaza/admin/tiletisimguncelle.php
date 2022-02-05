<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="İletişim Güncelle";
    include "inc/ahead.php";

    include "../lib/tdb.php";
    /* verileri çekme bölümü */
    $sorgu=$db->prepare("select * from tiletisim where id=:id");
    $sorgu->execute(['id'=>(int)$_GET["id"]]);
    $sonuc=$sorgu->fetch();
    

    
    // veri güncelleme

    if($_POST){
        $guncellesorgu=$db->prepare("UPDATE tiletisim SET 
        bold_txt=:bold_txt,
        text=:text,
        adress=:adress,
        tel=:tel,
        mail=:mail,
        mail_link=:mail_link,
        workingh=:workingh,
        bold_day=:bold_day,
        day_hours=:day_hours,
        off_day=:off_day,
        socialmedia=:socialmedia
        WHERE id=:id");
        
         $guncelle=$guncellesorgu->execute([
            'bold_txt'=>$_POST["bold_txt"],
            'text'=>$_POST["text"],
            'adress'=>$_POST["adress"],
            'tel'=>$_POST["tel"],
            'mail'=>$_POST["mail"],
            'mail_link'=>$_POST["mail_link"],
            'workingh'=>$_POST["workingh"],
            'bold_day'=>$_POST["bold_day"],
            'day_hours'=>$_POST["day_hours"],
            'off_day'=>$_POST["off_day"],
            'socialmedia'=>$_POST["socialmedia"],
            'id'=>(int)$_GET["id"]
         ]);
    }
         if(@$guncelle){
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Güncellediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                if(value.isConfirmed){window.location.href='tiletisim.php'}})</script>";
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
                            <label for="">Kalın Metin</label>
                            <input type="text" name="bold_txt" required class="form-control" value="<?= $sonuc["bold_txt"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin</label>
                            <input type="text" name="text" required class="form-control" value="<?= $sonuc["text"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Adress</label>
                            <input type="text" name="adress" required class="form-control" value="<?= $sonuc["adress"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Telefon</label>
                            <input type="text" name="tel" required class="form-control" value="<?= $sonuc["tel"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta</label>
                            <input type="text" name="mail" required class="form-control" value="<?= $sonuc["mail"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta Url</label>
                            <input type="text" name="mail_link" required class="form-control" value="<?= $sonuc["mail_link"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Çalışma</label>
                            <input type="text" name="workingh" required class="form-control" value="<?= $sonuc["workingh"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Günler</label>
                            <input type="text" name="bold_day" required class="form-control" value="<?= $sonuc["bold_day"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Saatler</label>
                            <input type="text" name="day_hours" required class="form-control" value="<?= $sonuc["day_hours"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Tatil</label>
                            <input type="text" name="off_day" required class="form-control" value="<?= $sonuc["off_day"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Sosyal Medya</label>
                            <input type="text" name="socialmedia" required class="form-control" value="<?= $sonuc["socialmedia"]?>">
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
      