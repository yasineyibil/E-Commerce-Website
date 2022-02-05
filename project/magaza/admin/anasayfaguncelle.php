<?php
$sayfa = "Anasayfa Güncelle";
include "inc/ahead.php";
/* verileri çekme bölümü */
$sorgu = $db->prepare("select * from anasayfa where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();


if ($_POST) { 
    //veri guncelleme
    $guncellesorgu = $db->prepare("Update anasayfa set btn_txt=:btn_txt, id=:id");
    $guncelle = $guncellesorgu->execute([
        'btn_txt' => $_POST["btn_txt"],
        'id' => (int)$_GET["id"]
    ]);
}


?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Anasayfa Güncelle</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Anasayfa Güncelle</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <img src="../image/<?= $sonuc["img_url"] ?>" width="200"><br>
                        <label for="">Resim</label>
                        <input type="text" name="img_url" required class="form-control" value="<?= $sonuc["img_url"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Buton Metin</label>
                        <input type="text" name="btn_txt" required class="form-control" value="<?= $sonuc["btn_txt"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Buton Uzantı</label>
                        <input type="text" name="btn_url" required class="form-control" value="<?= $sonuc["btn_url"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <img src="../image/urunler/<?= $sonuc["urun_img"] ?>" width="200"><br>
                        <label for="">Ürün Resim</label>
                        <input type="text" name="urun_img" required class="form-control" value="<?= $sonuc["urun_img"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Ürün Baslik</label>
                        <input type="text" name="urun_baslik" required class="form-control" value="<?= $sonuc["urun_baslik"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Ürün Fiyat</label>
                        <input type="text" name="urun_fiyat" required class="form-control" value="<?= $sonuc["urun_fiyat"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Ürün Uzantı</label>
                        <input type="text" name="urun_link" required class="form-control" value="<?= $sonuc["urun_link"] ?>">
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