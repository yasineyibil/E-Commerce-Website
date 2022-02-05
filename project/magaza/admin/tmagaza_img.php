<?php
    $sayfa="Mağaza Resim";
    include "inc/ahead.php";
    
    include "../lib/tdb.php";

 //   $products= $db->query("SELECT * from anasayfa", PDO::FETCH_OBJ)->fetchAll();
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?=$sayfa?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tanıtım / <?=$sayfa?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="tmagazaimgekle.php" class="btn btn-primary">Mağaza Resim Ekle</a>
                            </div>
                            <div class="card-body">
                                <table  id="datatablesSimple" enctype="multipart/form-data">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Resim Uzantı</th>
                                            <th>Resim</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php // foreach ($products as $product){
                                            /* verileri çekme bölümü */
                                            $sorgu=$db->prepare("select * from tmagaza_img");
                                            $sorgu->execute();
                                            while ($sonuc=$sorgu->fetch())
                                                {
                                            ?>
                                            <tr>
                                                
                                                <td width="30" class="text-center"><?= $sonuc["id"]?></td>
                                                <td width="250"><?= $sonuc["href_url"]?></td>  
                                                <td width="300" class="text-center"><img src="../../Antique-Rach/image/magaza-img/<?= $sonuc["img_url"]?>" width="200"  alt=""></td>
                                                <td width="60" class="text-center"><a href="tmagaza_imgguncelle.php?id=<?= $sonuc["id"]?>">
                                                    <span class="fa fa-edit"></span>
                                                </a></td>
                                                <td width="60" class="text-center">
                                                    <a href="tsil.php?id=<?= $sonuc["id"] ?>&tablo=tmagaza_img">
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
