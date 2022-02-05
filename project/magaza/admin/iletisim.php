<?php
    $sayfa="İletişim";
    include "inc/ahead.php";
 


?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?=$sayfa?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">İletişim / <?=$sayfa?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="iletisimekle.php" class="btn btn-primary">İletişim Ekle</a>
                            </div>
                            <div class="card-body">
                                <table  id="datatablesSimple" enctype="multipart/form-data">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Başlık</th>
                                            <th>Üst Metin</th>
                                            <th>Metin</th>
                                            <th>Telefon</th>
                                            <th>E-posta</th>
                                            <th>E-posta Url</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            /* verileri çekme bölümü */
                                            $sorgu=$db->prepare("select * from iletisim");
                                            $sorgu->execute();
                                            while ($sonuc=$sorgu->fetch())
                                                {
                                            ?>
                                            <tr>
                                                
                                                <td width="30" class="text-center"><?= $sonuc["id"]?></td>
                                                <td width="250"><?= $sonuc["baslik"]?></td>  
                                                <td width="300"><?= $sonuc["ust_txt"]?></td>
                                                <td width="250"><?= $sonuc["txt"]?></td>
                                                <td width="150"><?= $sonuc["tel"]?></td>
                                                <td width="150"><?= $sonuc["email"]?></td>
                                                <td width="150"><?= $sonuc["email_url"]?></td>
                                                <td width="60" class="text-center"><a href="iletisimguncelle.php?id=<?= $sonuc["id"]?>">
                                                    <span class="fa fa-edit"></span>
                                                </a></td>
                                                <td width="60" class="text-center">
                                                    <a href="sil.php?id=<?= $sonuc["id"] ?>&tablo=iletisim">
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
