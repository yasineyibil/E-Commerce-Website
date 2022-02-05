<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Atölye Ekle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */



    include "../lib/tdb.php";
    require "tconfig.php";
    if ($_POST) {
            DB::insert("INSERT INTO tatolye(bold_txt, txt) VALUES(?,?)", array(
                $_POST['bold_txt'],
                $_POST['txt'],
            ));
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Eklediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
            if(value.isConfirmed){window.location.href='tatolye.php?success=1'}})</script>";
        }



    
?>

 
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?=$sayfa?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Atölye / <?=$sayfa?></li>
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
                            <input type="text" name="txt" required class="form-control">
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
      