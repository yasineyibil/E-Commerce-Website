<?php
$sayfa = "Üçlü Gümüş Kaplama Servis Takımı";
include "inc/ind-menu.php";
?>
<!-- ----------- MENU END ------------ -->

<!-- ----------- CONTENT START ------------ -->

<div class="main-wrapper" style="margin-top:193px; margin-bottom:50px;">
  <?php
    include "lib/db.php";
    /* verileri çekme bölümü */
    $products = $db->query("SELECT * from mutfakk where id=5", PDO::FETCH_OBJ)->fetchAll();
    foreach ($products as $product) {
  ?>
    <div class="container">
      <div class="product-div">
        <div class="product-div-left">
          <div class="img-container">
            <img src="image/index-img-1.jpg" alt="Üçlü Gümüş Kaplama Servis Takımı">
          </div>
          <div class="hover-container">
            <div><img src="image/index-img-1.jpg" alt="Üçlü Gümüş Kaplama Servis Takımı"></div>
          </div>
        </div>
        <div class="product-div-right">
          <span class="product-name">Üçlü Gümüş Kaplama Servis Takımı</span>
          <span class="product-price" style="margin-top:40px">7000 &#8378;</span>
          <p class="product-description">Gümüş kaplama 3 parçalı servis seti.</p>

          <div class="sag-sol">
            <div class="sol">
              <i class="fa fa-quote-left" style="font-size: 19px;"></i>
            </div>
            <div class="sag">
              <p>
                <strong style="font-family:'content'; font-size:20px; font-weight:500; font-style: italic;">Renaud & J. Clermont Genève</strong>
                markalı Fransız servis takımı. Bir dönem özellikle lüks otellere ürettikleri özel parçalarla tanınan markadan günümüze kalan rüya gibi nadir parçalardan biri. Takım 2 tabak ve 1 sosluktan oluşmaktadır.
              </p>
            </div>
          </div>
          <p class="product-description" style="margin-top:40px"><strong>– Boyut:</strong> Tabaklar: 40x25cm, 35x23cm; Sosluk: 23x9cm</p>
          <p class="product-description" style="margin-top:-10px;">– Gümüş kaplama</p>
          <p class="product-description"><strong>&nbsp;&nbsp; 1 adet stokta</strong></p>
          <div class="btn-groups" style="margin-top:40px">
            <button type="submit" productid="<?php echo $product->id; ?>" class="buy-now-btn addToCartBtn">sepete ekle</button>
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