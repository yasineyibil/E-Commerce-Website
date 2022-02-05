<?php
$sayfa = "Anasayfa";
include "inc/ahead.php";
/* verileri çekme bölümü */
/*  
    */

//   $products= $db->query("SELECT * from anasayfa", PDO::FETCH_OBJ)->fetchAll();
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $sayfa ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Anasayfa / <?= $sayfa ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Resim</th>
                            <th>Buton metin</th>
                            <th>Buton Uzantı</th>
                            <th>Ürün Resim</th>
                            <th>Ürün Baslik</th>
                            <th>Ürün Fiyat</th>
                            <th>Ürün Uzantı</th>
                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php // foreach ($products as $product){
                        $sorgu = $db->prepare("select * from anasayfa");
                        $sorgu->execute();
                        while ($sonuc = $sorgu->fetch()) {
                        ?>
                            <tr>

                                <td width="60" class="text-center"><?= $sonuc["id"] ?></td>
                                <td width="100">
                                    <img src="../image/<?= $sonuc["img_url"] ?>" width="90" alt="">
                                </td>
                                <td width="150"><?= $sonuc["btn_txt"] ?></td>
                                <td width="100"><?= $sonuc["btn_url"] ?></td>
                                <td width="100"><img src="../image/urunler/<?= $sonuc["urun_img"] ?>" width="90" alt=""></td>
                                <td width="250"><?= $sonuc["urun_baslik"] ?></td>
                                <td width="100"><?= $sonuc["urun_fiyat"] ?></td>
                                <td width="150"><?= $sonuc["urun_link"] ?></td>
                                


                                <td width="60" class="text-center">
                                    <a href="sil.php?id=<?= $sonuc["id"] ?>&tablo=keten">
                                        <span class="fa fa-trash"></span>
                                    </a>



                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
include "inc/footer.php";
?>