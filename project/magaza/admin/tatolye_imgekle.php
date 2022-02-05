<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Atölye Resim Ekle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */




    
    @require "verot.net.php";
    require "tconfig.php";
    if ($_POST) {

        $foo = new upload($_FILES['img_url']);
        if ($foo->uploaded) {
            $foo->file_new_name_body = 'atolye_img';
            $foo->process('../../Antique-Rach/image/atolye-img/');
            if ($foo->processed) {
                $resim_adi = $foo->file_dst_name;
    
                DB::insert("INSERT INTO tatolye_img(href_url, img_url) VALUES(?,?)", array(
                    $_POST['href_url'],
                    $resim_adi,
                ));


                echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Eklediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                    if(value.isConfirmed){window.location.href='tatolye_img.php?success=1'}})</script>";
            }
            else{
                echo "<script> Swal.fire( { title:'Hata!', text:'Malesef Eklenmedi', icon:'error', confirmButtonText:'Kapat' }).then((value)=>{
                    if(value.isConfirmed){window.location.href='tatolye_img.php'}})</script>";
            }
        } else {
            Header("location:tatolye_img.php?resimHata=" . @$foo->error);
        }
    }


    
?>

 
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?=$sayfa?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tanıtım / <?=$sayfa?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label for="">Resim Uzantı</label>
                            <input type="text" name="href_url" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Resim</label>
                            <input type="file" name="img_url" required class="form-control">
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
      