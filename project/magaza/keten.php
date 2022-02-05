<?php require_once "lib/db.php";  ?>
<!-- ----------- MENU START ------------ -->
<?php
$sayfa = "Keten";
include "inc/ind-menu.php";
?>
<!-- ----------- MENU END ------------ -->

<!-- ----------- CONTENT START ------------ -->
<?php
/* verileri çekme bölümü */
$products = $db->query("SELECT * from keten", PDO::FETCH_OBJ)->fetchAll();
?>
<div class="Items" style="margin-top:250px; margin-bottom:50px;">
  <?php foreach ($products as $product) {  ?>
    <div class="Item">
      <a href=<?php echo $product->link_url; ?> class="Item__link">
        <div class="ImageContainer">
          <img src=image/urunler/<?php echo $product->img_url; ?> alt="Kandıra Keteni “Seyyah” Yastık 38x40cm" class="Image scroll">
      </a>
      <div class="eltdf-pl-text">
        <div class="eltdf-pl-text-outer">
          <div class="eltdf-pl-text-inner">
            <a href=<?php echo $product->link_url; ?> class="button" rel="nofollow">inceleyin</a>
          </div>
        </div>
      </div>
    </div>
    <div class="Item__title"><a href=<?php echo $product->link_url; ?>><?php echo $product->product_name; ?></a></div>
    <div class="Item__price"><?php echo $product->price; ?> &#8378;</div>
</div>
<?php } ?>
</div>


<!-- ----------- CONTENT END ------------ -->

<!-- ----------- FOOTER START ------------ -->

<?php
include "inc/ind-footer.php";
?>