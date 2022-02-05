<?php
    $sayfa="Hakkında Metin";
    include "inc/ahead.php";
    
    include "../lib/tdb.php";


?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?=$sayfa?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tanıtım / <?=$sayfa?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="thakkindaekle.php" class="btn btn-primary">Hakkında Ekle</a>
                            </div>
                            <div class="card-body">
                                <table  id="datatablesSimple" enctype="multipart/form-data">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kalın Metin</th>
                                            <th>Metin</th>
                                            <th>Kalın Metin 2</th>
                                            <th>Metin 2</th>
                                            <th>Kalın Metin 3</th>
                                            <th>Metin 3</th>
                                            <th>Kalın Metin 4</th>
                                            <th>Metin 4</th>
                                            <th>Kalın Metin 5</th>
                                            <th>Metin 5</th>  
                                            <th>Kalın Metin 6</th>
                                            <th>Metin 6</th>
                                            <th>Metin 7</th>
                                            <th>Kalın Metin 7</th>
                                            <th colspan="3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php // foreach ($products as $product){
                                            /* verileri çekme bölümü */
                                            $sorgu=$db->prepare("select * from thakkinda");
                                            $sorgu->execute();
                                            while ($sonuc=$sorgu->fetch())
                                                {
                                            ?>
                                            <tr>
                                                
                                                <td class="text-center"><?= $sonuc["id"]?></td>
                                                <td ><?= $sonuc["bold_txt"]?></td>  
                                                <td ><?= $sonuc["txt"]?></td>
                                                <td ><?= $sonuc["bold_txt2"]?></td>  
                                                <td ><?= $sonuc["txt2"]?></td>
                                                <td ><?= $sonuc["bold_txt3"]?></td>  
                                                <td ><?= $sonuc["txt3"]?></td>
                                                <td ><?= $sonuc["bold_txt4"]?></td>  
                                                <td ><?= $sonuc["txt4"]?></td>
                                                <td ><?= $sonuc["bold_txt5"]?></td>  
                                                <td ><?= $sonuc["txt5"]?></td>
                                                <td ><?= $sonuc["bold_txt6"]?></td>  
                                                <td ><?= $sonuc["txt6"]?></td>
                                                <td><?= $sonuc["txt7"]?></td>  
                                                <td ><?= $sonuc["bold_txt7"]?></td>  

                                                <td  class="text-center"><a href="thakkindaguncelle.php?id=<?= $sonuc["id"]?>">
                                                    <span class="fa fa-edit"></span>
                                                </a></td>
                                                <td class="text-center">
                                                    <a href="tsil.php?id=<?= $sonuc["id"] ?>&tablo=thakkinda">
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
