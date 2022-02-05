<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Mağaza Resim Güncelle";
    include "inc/ahead.php";


    include "../lib/tdb.php";
    $id=$_GET['id'];
    $resim="../../Antique-Rach/image/atolye-img/";
    $sorgu=$db->prepare("select * from tatolye_img where id=:id");
    $sorgu->execute(['id'=>(int)$_GET["id"]]);
    $sonuc=$sorgu->fetch();
    

    
    // veri güncelleme

    if($_POST){


        $resim_adi = "";
       
        if($_FILES)
        {

            
            @require "verot.net.php";
            require "tconfig.php";

            $foo = new upload($_FILES['img_url']);
            if ($foo->uploaded) {
                $foo->file_new_name_body = 'atolye_img';
                $foo->process('../../Antique-Rach/image/atolye-img/');
                if ($foo->processed) {
                    $resim_adi = $foo->file_dst_name;
                }
            }
        }


        if($resim_adi=="")
        {
            $sql = "UPDATE tatolye_img SET 
            href_url=:href_url
            WHERE id=:id";

            $prm = array('href_url'=>$_POST["href_url"],
                'id'=>(int)$_GET["id"]
                );
        }else{

            $sql = "UPDATE tatolye_img SET 
            href_url=:href_url,
            img_url=:img_url
            WHERE id=:id";

            $prm = array('href_url'=>$_POST["href_url"],
                'img_url'=>$resim_adi,
                'id'=>(int)$_GET["id"]
                );

        }
    





        $guncellesorgu=$db->prepare($sql);

           $guncelle=$guncellesorgu->execute($prm);         

        
    }

    
         if(@$guncelle){
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Güncellediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                if(value.isConfirmed){window.location.href='tatolye_img.php'}})</script>";
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
                            <input type="text" name="href_url" required class="form-control" value="<?= $sonuc["href_url"]?>">
                        </div>

                        <div class="form-group" style="margin-top:15px;">
                            <img src="../../Antique-Rach/image/atolye-img/<?= $sonuc["img_url"]?>" width="200"><br>
                            <label for="" style="margin-top:15px;">Ürün Resim</label>
                            <input type="file" name="img_url" class="form-control" value="">
                        </div>

                        <div class="form-group" style="margin-top:15px;">
                            <input type="submit" value="Güncelle" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
    include "inc/footer.php";
?>
      