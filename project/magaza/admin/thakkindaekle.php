<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Hakkında Ekle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */



    include "../lib/tdb.php";
    require "tconfig.php";
    if ($_POST) {
            DB::insert("INSERT INTO thakkinda(bold_txt, txt, bold_txt2, txt2, bold_txt3, txt3, bold_txt4, txt4, bold_txt5, txt5, bold_txt6, txt6, txt7, bold_txt7) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
                $_POST['bold_txt'],
                $_POST['txt'],
                $_POST['bold_txt2'],
                $_POST['txt2'],
                $_POST['bold_txt3'],
                $_POST['txt3'],
                $_POST['bold_txt4'],
                $_POST['txt4'],
                $_POST['bold_txt5'],
                $_POST['txt5'],
                $_POST['bold_txt6'],
                $_POST['txt6'],
                $_POST['txt7'],
                $_POST['bold_txt7'],
                
            ));
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Eklediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
            if(value.isConfirmed){window.location.href='thakkinda.php?success=1'}})</script>";
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
                            <input type="text" name="txt" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Kalın Metin 2</label>
                            <input type="text" name="bold_txt2" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin 2</label>
                            <input type="text" name="txt2" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Kalın Metin 3</label>
                            <input type="text" name="bold_txt3" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin 3</label>
                            <input type="text" name="txt3" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Kalın Metin 4</label>
                            <input type="text" name="bold_txt4" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin 4</label>
                            <input type="text" name="txt4" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Kalın Metin 5</label>
                            <input type="text" name="bold_txt5" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin 5</label>
                            <input type="text" name="txt5" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Kalın Metin 6</label>
                            <input type="text" name="bold_txt6" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin 6</label>
                            <input type="text" name="txt6" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin 7</label>
                            <input type="text" name="txt7" required class="form-control">
                        </div> 
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Kalın Metin 7</label>
                            <input type="text" name="bold_txt7" required class="form-control" >
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
      