<?php
    $sayfa="Mağaza Metin";
    include "inc/ahead.php";
    
    include "../lib/tdb.php";


?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?=$sayfa?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Mağaza / <?=$sayfa?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="tmagazaekle.php" class="btn btn-primary">Mağaza Ekle</a>
                            </div>
                            <div class="card-body">
                                <table  id="datatablesSimple" enctype="multipart/form-data">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kalın Metin</th>
                                            <th>Metin</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php // foreach ($products as $product){
                                            /* verileri çekme bölümü */
                                            $sorgu=$db->prepare("select * from tmagaza");
                                            $sorgu->execute();
                                            while ($sonuc=$sorgu->fetch())
                                                {
                                            ?>
                                            <tr>
                                                
                                                <td width="30" class="text-center"><?= $sonuc["id"]?></td>
                                                <td width="250"><?= $sonuc["bold_txt"]?></td>  
                                                <td width="300"><?= $sonuc["txt"]?></td>
                                                <td width="60" class="text-center"><a href="tmagazaguncelle.php?id=<?= $sonuc["id"]?>">
                                                    <span class="fa fa-edit"></span>
                                                </a></td>
                                                <td width="60" class="text-center">
                                                    <a href="tsil.php?id=<?= $sonuc["id"] ?>&tablo=tmagaza">
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
