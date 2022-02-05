<?php
    $sayfa="Antique Ranch | Hakkında";
    include "inc/menu.php";
?>
                <div class="header">
                    <div class="header-img">
                        <div class="header-text">
                          <h1><span>antıka magazası</span></h1>
                        </div>
                    </div>
                </div>
  </div>



  
        

        <div class="content scrollin">
            <?php
                include "mysql/config.php";
                $products= $db->query("SELECT * from thakkinda", PDO::FETCH_OBJ)->fetchAll();
                foreach ($products as $product){
            ?>
        <p>
          <em><strong><?php echo $product->bold_txt; ?></strong></em> <?php echo $product->txt; ?>
        </p>
        <p>
          <em><strong><?php echo $product->bold_txt2; ?></strong></em> <?php echo $product->txt2; ?>  
          <em><strong><?php echo $product->bold_txt3; ?></strong></em><?php echo $product->txt3; ?>
     
        
        </p>
        <div class="sag-sol">
              <div class="sol">
                <i class="fa fa-quote-right" style="color:#dacd87; font-size: 19px;"></i>
              </div>
              <div class="sag">
                <p>
                <?php echo $product->bold_txt4; ?>
                </p>
              </div>
        </div>
                <p>
                <?php echo $product->txt4; ?>
                  <em><strong><?php echo $product->bold_txt5; ?></strong></em> <?php echo $product->txt5; ?>
                  <em><strong><?php echo $product->bold_txt6; ?></strong></em> <?php echo $product->txt6; ?>
                </p>
                <p>   
                <?php echo $product->txt7; ?>
                </p>
                <p>
                  <em><strong><?php echo $product->bold_txt7; ?></strong></em>
                </p>

            <?php } ?>
      </div>


<?php
    include "inc/footer.php";
?>