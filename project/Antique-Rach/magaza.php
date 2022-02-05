<?php
    $sayfa="Antique Ranch | Mağaza";
    include "inc/menu.php";
?>
            <div class="header">
                <div class="header-magaza-img">
                    <div class="header-text">
                      <h1><span>antıka magazası</span></h1>
                    </div>
                </div>
            </div>
</div>


    
    <?php
        /* verileri çekme bölümü */
        include "mysql/config.php";
        $sorgu=$db->prepare("select * from tmagaza");
        $sorgu->execute();
        while ($sonuc=$sorgu->fetch())
    {   
    ?>
        <div class="content">
            <p class="timeline-content js--fadeInLeft">
                <em><strong><?= $sonuc["bold_txt"] ?></strong></em> <?= $sonuc["txt"] ?>
            </p>
        </div>
    <?php } ?>
   
<?php 
    $products= $db->query("SELECT * from tmagaza_img", PDO::FETCH_OBJ)->fetchAll();
?>
    <div class="content">
        <div class="photo-gallery">
        
            <div class="row">
                <?php  foreach ($products as $product){  ?>
                <div class="column"> 
                    <a href="image/magaza-img/<?php echo $product->href_url; ?>" data-lightbox="photos"><figure class="scroll"><img src="image/magaza-img/<?php echo $product->img_url; ?>"  style="width:100%"></figure></a>   
                </div>
                <?php } ?>
            </div>
        </div>
    </div>




<?php
    include "inc/footer.php";
?>
