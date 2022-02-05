<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Mağaza Ekle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */



    include "../lib/tdb.php";
    require "tconfig.php";
    if ($_POST) {
            DB::insert("INSERT INTO tiletisim(bold_txt, text, adress, tel, mail, mail_link, workingh, bold_day, day_hours, off_day, socialmedia) VALUES(?,?,?,?,?,?,?,?,?,?,?)", array(
                $_POST['bold_txt'],
                $_POST['text'],
                $_POST['adress'],
                $_POST['tel'],
                $_POST['mail'],
                $_POST['mail_link'],
                $_POST['workingh'],
                $_POST['bold_day'],
                $_POST['day_hours'],
                $_POST['off_day'],
                $_POST['socialmedia'],
            ));
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Eklediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
            if(value.isConfirmed){window.location.href='tiletisim.php?success=1'}})</script>";
        }



    
?>

 
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?=$sayfa?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Hakkında / <?=$sayfa?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label for="">Kalın Metin</label>
                            <input type="text" name="bold_txt" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin</label>
                            <input type="text" name="text" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Adress</label>
                            <input type="text" name="adress" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Telefon</label>
                            <input type="text" name="tel" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta</label>
                            <input type="text" name="mail" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">E-posta Url</label>
                            <input type="text" name="mail_link" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Çalışma</label>
                            <input type="text" name="workingh" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Günler</label>
                            <input type="text" name="bold_day" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Saat</label>
                            <input type="text" name="day_hours" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Tatil</label>
                            <input type="text" name="off_day" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Sosyal Medya</label>
                            <input type="text" name="socialmedia" required class="form-control">
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
      