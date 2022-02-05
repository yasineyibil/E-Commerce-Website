<?php require_once "lib/db.php";  ?>

  <!-- ----------- MENU START ------------ -->
  <?php
    $sayfa="Ürünler";
  include "inc/ind-menu.php";
?>
  <!-- ----------- MENU END ------------ -->
  <!-- ----------- CONTENT START ------------ -->
<div style="margin-top:250px;">
  <div class="container tab-container">
    <div class="tab-navigation">              
      <select id="select-box">
        <option value="1">Mutfak</option>
        <option value="2">Obje</option>
        <option value="3">İpek</option>
        <option value="4">Keten</option>
      </select>
    </div>
    
    <div id="tab-1" class="tab-content" >
      <?php
        /* verileri çekme bölümü */
        $products= $db->query("SELECT * from mutfakk", PDO::FETCH_OBJ)->fetchAll();
      ?>
      <div class="Items" style=" margin-bottom:50px;">
        <?php  foreach ($products as $product){  ?>
        <div class="Item" >
              <div class="ImageContainer">
                <img src="image/urunler/<?php echo $product->img_url; ?>" alt="Christofle Balık Servis Tabağı" class="Image">
                <div class="eltdf-pl-text">
                  <div class="eltdf-pl-text-outer">
                    <div class="eltdf-pl-text-inner" >
                        <button name="sepeteekle" productid="<?php echo $product->id; ?>" class="button addToCartBtn" rel="nofollow">Sepete Ekle</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="Item__title"><a href=<?php echo $product->link_url; ?>><?php echo $product->product_name; ?></a></div>
              <!--             <div class="Item__title-inner"><a href="mutfak.php">Mutfak</a></div> -->
              <div class="Item__price"><?php echo $product->price; ?> &#8378;</div>
        </div>
        <?php } ?>
      </div>
    </div>
    
    <div id="tab-2" class="tab-content">
      <?php
        /* verileri çekme bölümü */
        $products= $db->query("SELECT * from obje", PDO::FETCH_OBJ)->fetchAll();
      ?>
      <div class="Items" style="margin-bottom:50px;">
        <?php  foreach ($products as $product){  ?>
        <div class="Item">
            <a href=<?php echo $product->link_url; ?> class="Item__link">
              <div class="ImageContainer">
                <img src="image/urunler/<?php echo $product->img_url; ?>" alt="Ahşap Sebze Tartısı" class="Image">
            </a>
              <div class="eltdf-pl-text">
                <div class="eltdf-pl-text-outer">
                  <div class="eltdf-pl-text-inner" >
                  <button name="sepeteekle" productid="<?php echo $product->id; ?>" class="button addToCartBtnn" rel="nofollow">Sepete Ekle</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="Item__title"><a href=<?php echo $product->link_url; ?>><?php echo $product->product_name; ?></a></div>
            <div class="Item__price"><?php echo $product->price; ?> &#8378;</div>
        </div>
        <?php } ?>
      </div>
    </div>

    <div id="tab-3" class="tab-content" >
      <?php
        /* verileri çekme bölümü */
        $products= $db->query("SELECT * from ipek", PDO::FETCH_OBJ)->fetchAll();
      ?>
      <div class="Items" style=" margin-bottom:50px;">
        <?php  foreach ($products as $product){  ?>
        <div class="Item" >
              <div class="ImageContainer">
                <img src="image/urunler/<?php echo $product->img_url; ?>" alt="Christofle Balık Servis Tabağı" class="Image">
                <div class="eltdf-pl-text">
                  <div class="eltdf-pl-text-outer">
                    <div class="eltdf-pl-text-inner" >
                        <button name="sepeteekle" productid="<?php echo $product->id; ?>" class="button addToCartBtnnn" rel="nofollow">Sepete Ekle</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="Item__title"><a href=<?php echo $product->link_url; ?>><?php echo $product->product_name; ?></a></div>
              <!--             <div class="Item__title-inner"><a href="mutfak.php">Mutfak</a></div> -->
              <div class="Item__price"><?php echo $product->price; ?> &#8378;</div>
        </div>
        <?php } ?>
      </div>
    </div>

    <div id="tab-4" class="tab-content" >
      <?php
        /* verileri çekme bölümü */
        $products= $db->query("SELECT * from keten", PDO::FETCH_OBJ)->fetchAll();
      ?>
      <div class="Items" style=" margin-bottom:50px;">
        <?php  foreach ($products as $product){  ?>
        <div class="Item" >
              <div class="ImageContainer">
                <img src="image/urunler/<?php echo $product->img_url; ?>" class="Image">
                <div class="eltdf-pl-text">
                  <div class="eltdf-pl-text-outer">
                    <div class="eltdf-pl-text-inner" >
                        <button name="sepeteekle" productid="<?php echo $product->id; ?>" class="button addToCartBtnnnn" rel="nofollow">Sepete Ekle</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="Item__title"><a href=<?php echo $product->link_url; ?>><?php echo $product->product_name; ?></a></div>
              <!--             <div class="Item__title-inner"><a href="mutfak.php">Mutfak</a></div> -->
              <div class="Item__price"><?php echo $product->price; ?> &#8378;</div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>



  
 

  <!-- ----------- CONTENT END ------------ -->

   <!-- ----------- FOOTER START ------------ -->

<?php
  include "inc/ind-footer.php";
?>