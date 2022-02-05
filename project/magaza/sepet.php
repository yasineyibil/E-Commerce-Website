<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>

<?php
$sayfa = "Sepet";
include "inc/ind-menu.php";
?>
<?php

if (isset($_SESSION["shoppingCart"])) {

  $shoppingCart = $_SESSION["shoppingCart"];

  $total_count = $shoppingCart["summary"]["total_count"];
  $total_price = $shoppingCart["summary"]["total_price"];
  $shopping_products = $shoppingCart["products"];
} else {
  $total_count = 0;
  $total_price = 0;
}



?>
<!-- ----------- MENU END ------------ -->

<!-- ----------- CONTENT START ------------ -->
<?php

if (isset($_SESSION["Kullanici"])) {
?>
  <div class="container" style="margin-top:250px; margin-bottom:50px;">
      <?php
      if ($total_count > 0) {
      ?>
        <h2 class="text-center">Sepetinizde <strong class="stronger text-danger"><?php echo $total_count; ?></strong> adet ürün bulunmaktadır </h2>

      <?php
      } else {
      ?>
        <div class="alert alert-danger"><strong>Sepetinizde Henüz Bir Ürün Bulumamaktadır. Eklemek İçin <a href="index.php">Tıklayınız</a></strong></div>
      <?php
      }
      ?>
    <hr>
    </div>
    <div class="row" style="margin-top:50px; margin-bottom:50px; ">
      <div class="col-md-8 offset-md-2">
        <table class="table table-hover table-bordered table-striped">
          <thead>
            <th class="center">Ürün Resmi</th>
            <th class="center">Ürün Adı</th>
            <th class="center">Fiyatı</th>
            <th class="center">Adeti</th>
            <th class="center">Toplam</th>
            <th class="center">Sepetten Çıkar</th>
          </thead>
          <tbody>
            <?php
            foreach ($shopping_products as $product) {
            ?>
              <tr>
                <td class="text-center" width="120">
                  <img class="mx-auto" src="image/urunler/<?php echo $product->img_url ?>" width="50" alt="">
                </td>
                <td class="text-center"><?php echo $product->product_name ?></td>
                <td class="text-center"><strong><?php echo $product->price ?> ₺</strong></td>
                <td class="text-center">

                  <a href="lib/cart_db.php?p=incCount&product_id=<?php echo $product->id; ?>" class="btn btn-sm btn-success">
                    <span class="fas fa-plus"></span>
                  </a>

                  <input type="text" class="item-count-input" value="<?php echo $product->count; ?>">

                  <a href="lib/cart_db.php?p=decCount&product_id=<?php echo $product->id; ?>" class="btn btn-sm btn-danger">
                    <span class="fas fa-minus"></span>
                  </a>

                </td>
                <td class="text-center"><?php echo $product->total_price ?> ₺</td>
                <td class="text-center" width="170">
                  <button productid="<?php echo $product->id; ?>" class="btn btn-sm btn-danger removeFromCartBtn">
                    <span class="fas fa-times"></span> Sepetten Çıkar
                  </button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <th colspan="2" class="text-right">
              Toplam Ürün: <span class="text-danger"><?php echo $total_count; ?> adet</span>
            </th>
            <th colspan="3" class="text-right">
              Toplam Fiyat: <span class="text-danger"><?php echo $total_price; ?> ₺</span>
            </th>
            <th class="text-right"><a href="satinal.php">Satın Al </a></th>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

<?php
} else {
  session_destroy();
?>
  <div class="container">
    <br><br><br><br><br><br><br><br><br>
    <div class="alert alert-danger">Sepeti Görüntüleme kiçin lütfen <a href="giris.php"> giriş yapıp</a> sepetinize ürün ekleyiniz</div>

    <br><br><br><br><br><br><br><br><br>
  </div>
<?php
}
?>


<!-- ----------- CONTENT END ------------ -->

<!-- ----------- FOOTER START ------------ -->

<?php
include 'inc/ind-footer.php';
?>