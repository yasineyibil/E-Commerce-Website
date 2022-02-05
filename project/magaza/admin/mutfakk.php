<?php
    $sayfa="Mutfak";
    include "inc/ahead.php";
    

?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?=$sayfa?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Ürünler / <?=$sayfa?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="mutfakekle.php" class="btn btn-primary">Mutfak Ekle</a>
                            </div>
                            <div class="card-body">
                                <table  id="datatablesSimple" enctype="multipart/form-data">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ürün İsmi</th>
                                            <th>Hakkında</th>
                                            <th>Fiyat</th>
                                            <th>Ürün Resim</th>
                                            <th>Urun Uzantı</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php // foreach ($products as $product){
                                            /* verileri çekme bölümü */
                                            $sorgu=$db->prepare("select * from mutfakk");
                                            $sorgu->execute();
                                            while ($sonuc=$sorgu->fetch())
                                                {
                                            ?>
                                            <tr>
                                                
                                                <td width="30" class="text-center"><?= $sonuc["id"]?></td>
                                                <td width="250"><?= $sonuc["product_name"]?></td>  
                                                <td width="300"><?= $sonuc["detail"]?></td>
                                                <td width="100"><?= $sonuc["price"]?></td>
                                                <td width="100" class="text-center"><img src="../image/urunler/<?= $sonuc["img_url"]?>" width="90" alt=""></td>
                                                <td width="150"><?= $sonuc["link_url"]?></td>
                                                <td width="60" class="text-center"><a href="mutfakguncelle.php?id=<?= $sonuc["id"]?>">
                                                    <span class="fa fa-edit"></span>
                                                </a></td>
                                                <td width="60" class="text-center">
                                                    <a href="sil.php?id=<?= $sonuc["id"] ?>&tablo=mutfakk">
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
