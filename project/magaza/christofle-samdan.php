  <!-- ----------- MENU START ------------ -->
  <?php
  $sayfa = "Christofle Şamdan";
  include "inc/ind-menu.php";
  ?>
  <!-- ----------- MENU END ------------ -->

  <!-- ----------- CONTENT START ------------ -->

<div class="main-wrapper" style="margin-top:193px; margin-bottom:50px;">
  <?php
    include "lib/db.php";
    /* verileri çekme bölümü */
    $products = $db->query("SELECT * from obje where id=8", PDO::FETCH_OBJ)->fetchAll();
    foreach ($products as $product) {
  ?>
    <div class="container">
      <div class="product-div">
        <div class="product-div-left">
          <div class="img-container">
            <img src="image/urunler/obje8.webp" alt="Christofle Şamdan">
          </div>
          <div class="hover-container">
            <div><img src="image/urunler/obje8.webp" alt="Christofle Şamdan"></div>
            <div><img src="image/urunler/christofle-samdan2.jpg" alt="Christofle Şamdan"></div>
            <div><img src="image/urunler/christofle-samdan3.jpg" alt="Christofle Şamdan"></div>
            <div><img src="image/urunler/christofle-samdan4.jpg" alt="Christofle Şamdan"></div>
            <div><img src="image/urunler/christofle-samdan5.jpg" alt="Christofle Şamdan"></div>
          </div>
        </div>
        <div class="product-div-right">
          <span class="product-name">Christofle Şamdan</span>
          <span class="product-price" style="margin-top:40px">1100 &#8378;</span>
          <p class="product-description">Gümüş kaplama şamdan</p>

          <div class="sag-sol">
            <div class="sol">
              <i class="fa fa-quote-left" style="font-size: 19px;"></i>
            </div>
            <div class="sag">
              <p>
                <strong style="font-family:'content'; font-size:20px; font-weight:500; font-style: italic;">Christofle</strong> marka gümüş kaplama antika şamdan. 19.yy sonunda Avrupa’nın en sevilen markalarından biri olan Christofle’ın klasiklerinden, bir özel Fransız.
              </p>
            </div>
          </div>
          <p class="product-description" style="margin-top:40px"><strong>– Boyut:</strong> 13cm (Taban çapı)</p>
          <p class="product-description" style="margin-top:-10px;">– Gümüş kaplama.</p>
          <p class="product-description"><strong>&nbsp;&nbsp; 1 adet stokta</strong></p>
          <div class="btn-groups" style="margin-top:40px">
            <button type="submit" productid="<?php echo $product->id; ?>" class="buy-now-btn addToCartBtnn">sepete ekle</button>
          </div>
          <p class="product-description" style="margin-top:40px">Bu ürüne benzer bir ürün mü arıyorsunuz? <a href="#">Bizimle iletisime geçin</a>, 25 senedir topladığımız antikaları sakladığımız depomuza sizin için bakalım.</p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

  <div class="Items" style="margin-bottom:50px;">
    <div class="Item">
      <a href="#" class="Item__link">
        <div class="ImageContainer">
          <img src="image/urunler/img1-1-900x1200.webp" alt="Sıcak Çikolata Cezvesi" class="Image scroll">
          <div class="eltdf-pl-text">
            <div class="eltdf-pl-text-outer">
              <div class="eltdf-pl-text-inner">
                <a href="#" class="button" rel="nofollow">inceleyin</a>
              </div>
            </div>
          </div>
        </div>
        <div class="Item__title">Sıcak Çikolata Cezvesi</div>
        <div class="Item__title-inner">Mutfak</div>
        <div class="Item__price">3750 &#8378;</div>
      </a>
    </div>
    <div class="Item">
      <a href="#" class="Item__link">
        <div class="ImageContainer">
          <img src="image/urunler/img1-1-900x1200.webp" alt="Sıcak Çikolata Cezvesi" class="Image scroll">
          <div class="eltdf-pl-text">
            <div class="eltdf-pl-text-outer">
              <div class="eltdf-pl-text-inner">
                <a href="#" class="button" rel="nofollow">inceleyin</a>
              </div>
            </div>
          </div>
        </div>
        <div class="Item__title">Sıcak Çikolata Cezvesi</div>
        <div class="Item__title-inner">Mutfak</div>
        <div class="Item__price">3750 &#8378;</div>
      </a>
    </div>
    <div class="Item">
      <a href="#" class="Item__link">
        <div class="ImageContainer">
          <img src="image/urunler/img1-1-900x1200.webp" alt="Sıcak Çikolata Cezvesi" class="Image scroll">
          <div class="eltdf-pl-text">
            <div class="eltdf-pl-text-outer">
              <div class="eltdf-pl-text-inner">
                <a href="#" class="button" rel="nofollow">inceleyin</a>
              </div>
            </div>
          </div>
        </div>
        <div class="Item__title">Sıcak Çikolata Cezvesi</div>
        <div class="Item__title-inner">Mutfak</div>
        <div class="Item__price">3750 &#8378;</div>
      </a>
    </div>
  </div>
  <!-- ----------- CONTENT END ------------ -->

  <!-- ----------- FOOTER START ------------ -->

  <?php
  include "inc/ind-footer.php";
  ?>