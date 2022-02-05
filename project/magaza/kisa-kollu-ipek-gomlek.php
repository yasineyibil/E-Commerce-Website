  <!-- ----------- MENU START ------------ -->
  <?php
  $sayfa = "Kısa Kollu İpek Gömlek";
  include "inc/ind-menu.php";
  ?>
  <!-- ----------- MENU END ------------ -->

  <!-- ----------- CONTENT START ------------ -->

<div class="main-wrapper" style="margin-top:193px; margin-bottom:50px;">
  <?php
    include "lib/db.php";
    /* verileri çekme bölümü */
    $products = $db->query("SELECT * from ipek where id=2", PDO::FETCH_OBJ)->fetchAll();
    foreach ($products as $product) {
  ?>
    <div class="container">
      <div class="product-div">
        <div class="product-div-left">
          <div class="img-container">
            <img src="image/urunler/index-img-1-1.webp.jpg" alt="Kısa Kollu İpek Gömlek">
          </div>
          <div class="hover-container">
            <div><img src="image/urunler/index-img-1-1.webp.jpg" alt="Kısa Kollu İpek Gömlek"></div>
            <div><img src="image/urunler/ipek-gomlek2.jpg" alt="Kısa Kollu İpek Gömlek"></div>
            <div><img src="image/urunler/ipek-gomlek3.jpg" alt="Kısa Kollu İpek Gömlek"></div>
            <div><img src="image/urunler/ipek-gomlek4.jpg" alt="Kısa Kollu İpek Gömlek"></div>
            <div><img src="image/urunler/ipek-gomlek5.jpg" alt="Kısa Kollu İpek Gömlek"></div>
          </div>
        </div>
        <div class="product-div-right">
          <span class="product-name">Kısa Kollu İpek Gömlek</span>
          <span class="product-price" style="margin-top:40px">1350 &#8378;</span>
          <p class="product-description">%100 saf ipek kısa kollu bluz.</p>

          <div class="sag-sol">
            <div class="sol">
              <i class="fa fa-quote-left" style="font-size: 19px;"></i>
            </div>
            <div class="sag">
              <p>
                <strong style="font-family:'content'; font-size:20px; font-weight:500; font-style: italic;">Antakya’da 100</strong> senedir aktif olarak kullanılan dokuma tezgahlarında üretilen saf ipeklerden dikiyoruz bu gömlekleri. Biz tasarlıyoruz, kumaşlar geçmişin izini de alıp geliyor, ortaya işte bu narin ürünler çıkıyor.
              </p>
            </div>
          </div>
          <p class="product-description" style="margin-top:40px"><strong> – Beden:</strong> Standart beden. S-M beden için uygundur.</p>
          <p class="product-description" style="margin-top:-10px;">– %100 saf ipek.</p>
          <p class="product-description"><strong>– Kemer ayrı satılmaktadır. İpek ürünlerimizin tedarik süresi 5 iş günüdür.</strong></p>
          <div class="btn-groups" style="margin-top:40px">
            <button type="submit" productid="<?php echo $product->id; ?>" class="buy-now-btn addToCartBtnnn">sepete ekle</button>
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