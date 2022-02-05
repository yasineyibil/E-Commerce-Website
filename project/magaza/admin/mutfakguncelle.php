<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Mutfak Güncelle";
    include "inc/ahead.php";



    $id=$_GET['id'];
    $resim="../image/mutfak/";
    $sorgu=$db->prepare("select * from mutfakk where id=:id");
    $sorgu->execute(['id'=>(int)$_GET["id"]]);
    $sonuc=$sorgu->fetch();
    

    
    // veri güncelleme

    if($_POST){


        $resim_adi = "";
       
        if($_FILES)
        {

            
            @require "verot.net.php";
            require "config.php";

            $foo = new upload($_FILES['img_url']);
            if ($foo->uploaded) {
                $foo->file_new_name_body = 'mutfak_img';
                $foo->process('../image/urunler/');
                if ($foo->processed) {
                    $resim_adi = $foo->file_dst_name;
                }
            }
        }


        if($resim_adi=="")
        {
            $sql = "UPDATE mutfakk SET 
            product_name=:product_name,
            detail=:detail,
            price=:price,
            link_url=:link_url
            WHERE id=:id";

            $prm = array('product_name'=>$_POST["product_name"],'detail'=>$_POST["detail"],
                'price'=>$_POST["price"],'link_url'=>$_POST["link_url"],
                'id'=>(int)$_GET["id"]
                );
        }else{

            $sql = "UPDATE mutfakk SET 
            product_name=:product_name,
            detail=:detail,
            price=:price,
            img_url=:img_url,
            link_url=:link_url
            WHERE id=:id";

            $prm = array('product_name'=>$_POST["product_name"],'detail'=>$_POST["detail"],
                'price'=>$_POST["price"],'img_url'=>$resim_adi,'link_url'=>$_POST["link_url"],
                'id'=>(int)$_GET["id"]
                );

        }
    







        $guncellesorgu=$db->prepare($sql);

           $guncelle=$guncellesorgu->execute($prm);         

        
    }

    
         if(@$guncelle){
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Güncellediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                if(value.isConfirmed){window.location.href='mutfakk.php'}})</script>";
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
                            <input type="text" name="product_name" required class="form-control" value="<?= $sonuc["product_name"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Hakkında</label>
                            <input type="text" name="detail" required class="form-control" value="<?= $sonuc["detail"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Fiyat</label>
                            <input type="text" name="price" required class="form-control" value="<?= $sonuc["price"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <img src="../image/urunler/<?= $sonuc["img_url"]?>" width="200"><br>
                            <label for="" style="margin-top:15px;">Ürün Resim</label>
                            <input type="file" name="img_url" class="form-control" value="">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Ürün Uzantı</label>
                            <input type="text" name="link_url" required class="form-control" value="<?= $sonuc["link_url"]?>">
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
      