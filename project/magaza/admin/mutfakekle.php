<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Mutfak Ekle";
    include "inc/ahead.php";
    /* verileri çekme bölümü */




    
    @require "verot.net.php";
    require "config.php";
    if ($_POST) {

        $foo = new upload($_FILES['img_url']);
        if ($foo->uploaded) {
            $foo->file_new_name_body = 'mutfak_img';
            $foo->process('../image/urunler/');
            if ($foo->processed) {
                $resim_adi = $foo->file_dst_name;
    
                DB::insert("INSERT INTO mutfakk(product_name, detail, price, img_url, link_url) VALUES(?,?,?,?,?)", array(
                    $_POST['product_name'],
                    $_POST['detail'],
                    $_POST['price'],
                    $resim_adi,
                    $_POST['link_url'],
                ));


                echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Eklediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                    if(value.isConfirmed){window.location.href='mutfakk.php?success=1'}})</script>";
            }
            else{
                echo "<script> Swal.fire( { title:'Hata!', text:'Malesef Eklenmedi', icon:'error', confirmButtonText:'Kapat' }).then((value)=>{
                    if(value.isConfirmed){window.location.href='mutfakekle.php'}})</script>";
            }
        } else {
            Header("location:mutfakekle.php?resimHata=" . @$foo->error);
        }
    }


    
?>

 
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><?=$sayfa?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Ürünler / <?=$sayfa?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label for="">Ürün İsmi</label>
                            <input type="text" name="product_name" required class="form-control" >
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Hakkında</label>
                            <input type="text" name="detail" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Fiyat</label>
                            <input type="text" name="price" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Ürün Resim</label>
                            <input type="file" name="img_url" required class="form-control">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Ürün Uzantı</label>
                            <input type="text" name="link_url" required class="form-control">
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
      