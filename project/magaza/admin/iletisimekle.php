<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="İletişim Ekle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */




    
    @require "verot.net.php";
    require "config.php";
    if ($_POST) {
            DB::insert("INSERT INTO iletisim(baslik, ust_txt, txt, tel, email, email_url) VALUES(?,?,?,?,?,?)", array(
                $_POST['baslik'],
                $_POST['ust_txt'],
                $_POST['txt'],
                $_POST['tel'],
                $_POST['email'],
                $_POST['email_url'],
            ));
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Eklediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
            if(value.isConfirmed){window.location.href='iletisim.php?success=1'}})</script>";
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label for="">Başlık</label>
                            <input type="text" name="baslik" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Üst Metin</label>
                            <input type="text" name="ust_txt" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin</label>
                            <input type="text" name="txt" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Telefon</label>
                            <input type="text" maxlength="11" name="tel" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta</label>
                            <input type="text" name="email" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta Url</label>
                            <input type="text" name="email_url" required class="form-control">
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
      