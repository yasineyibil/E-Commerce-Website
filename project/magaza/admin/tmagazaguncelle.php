<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Mağaza Güncelle";
    include "inc/ahead.php";

    include "../lib/tdb.php";
    /* verileri çekme bölümü */
    $sorgu=$db->prepare("select * from tmagaza where id=:id");
    $sorgu->execute(['id'=>(int)$_GET["id"]]);
    $sonuc=$sorgu->fetch();
    

    
    // veri güncelleme

    if($_POST){
        $guncellesorgu=$db->prepare("UPDATE tmagaza SET 
        bold_txt=:bold_txt,
        txt=:txt
        WHERE id=:id");
        
         $guncelle=$guncellesorgu->execute([
            'bold_txt'=>$_POST["bold_txt"],
            'txt'=>$_POST["txt"],
            'id'=>(int)$_GET["id"]
         ]);
    }

         if(@$guncelle){
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Güncellediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                if(value.isConfirmed){window.location.href='tmagaza.php'}})</script>";
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
                <form action="" method="post">
                        <div class="form-group" >
                            <label for="">Kalın Metin</label>
                            <input type="text" name="bold_txt" required class="form-control" value="<?= $sonuc["bold_txt"]?>">
                        </div>
                        <div class="form-group" style="margin-top:15px;">
                            <label for="">Metin</label>
                            <input type="text" name="txt" required class="form-control" value="<?= $sonuc["txt"]?>">
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
      