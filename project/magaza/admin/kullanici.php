<?php
    $sayfa="Kullanıcılar";
    include "inc/ahead.php";
 

?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?=$sayfa?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Kullanıcılar / <?=$sayfa?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="kullaniciekle.php" class="btn btn-primary">Kullanıcı Ekle</a>
                            </div>
                            <div class="card-body">
                                <table  id="datatablesSimple" enctype="multipart/form-data">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ad</th>
                                            <th>Soyad</th>
                                            <th>E-posta</th>
                                            <th>Şifre</th>
                                            <th>Yetki</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php // foreach ($products as $product){
                                            /* verileri çekme bölümü */
                                            $sorgu=$db->prepare("select * from kullanici");
                                            $sorgu->execute();
                                            while ($sonuc=$sorgu->fetch())
                                                {
                                            ?>
                                            <tr>
                                                
                                                <td width="30" class="text-center"><?= $sonuc["id"]?></td>
                                                <td width="250"><?= $sonuc["ad"]?></td>  
                                                <td width="300"><?= $sonuc["soyad"]?></td>
                                                <td width="250"><?= $sonuc["mail"]?></td>
                                                <td width="150"><?= $sonuc["password"]?></td>
                                                <td width="150"><span class="fa fa-2x fa-<?= $sonuc["yetki"]=="1"?"check text-success":"times text-danger" ?>"></span></td>
                                                <td width="60" class="text-center"><a href="kullaniciguncelle.php?id=<?= $sonuc["id"]?>">
                                                    <span class="fa fa-edit"></span>
                                                </a></td>
                                                <td width="60" class="text-center">
                                                    <a href="sil.php?id=<?= $sonuc["id"] ?>&tablo=kullanici">
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
