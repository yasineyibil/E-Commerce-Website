  <!-- ----------- MENU START ------------ -->
  <?php
  $sayfa = "Kandıra Keteni “Seyyah” Yastık 80x40cm";
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
            <img src="image/urunler/keten2.webp" alt="Kandıra Keteni “Seyyah” Yastık 80x40cm">
          </div>
          <div class="hover-container">
            <div><img src="image/urunler/keten2.webp" alt="Kandıra Keteni “Seyyah” Yastık 80x40cm"></div>
            <div><img src="image/urunler/keten80x40-2.jpg" alt="Kandıra Keteni “Seyyah” Yastık 80x40cm"></div>
            <div><img src="image/urunler/keten-38x40-3" alt="Kandıra Keteni “Seyyah” Yastık 80x40cm"></div>
            <div><img src="image/urunler/keten-38x40-4.jpg" alt="Kandıra Keteni “Seyyah” Yastık 80x40cm"></div>
            <div><img src="image/urunler/keten-38x40-5.jpg" alt="Kandıra Keteni “Seyyah” Yastık 80x40cm"></div>
          </div>
        </div>
        <div class="product-div-right">
          <span class="product-name">Kandıra Keteni “Seyyah” Yastık 80x40cm</span>
          <span class="product-price" style="margin-top:40px">350 &#8378;</span>
          <p class="product-description">El dokuması Kandıra bezinden yastık.</p>

          <div class="sag-sol">
            <div class="sol">
              <i class="fa fa-quote-left" style="font-size: 19px;"></i>
            </div>
            <div class="sag">
              <p>
                <strong style="font-family:'content'; font-size:20px; font-weight:500; font-style: italic;">Seyahat</strong>,
                edemediğimiz pandemi günlerinde, gidemediğiniz yerlere uzanalım istedik. El dokuması Kandıra bezi kumaşlara, kartlar tasarlayıp otel öyküleri anlattık; ortaya sınırlı sayıda üretilen “Seyyah” koleksiyonu çıktı.
              </p>
            </div>
          </div>
          <p class="product-description" style="margin-top:40px">– Fermuarlı yastık kılıfı, yastık içi ve otelin öyküsünü anlatan kartpostal ile beraber gönderilir.</p>
          <p class="product-description" style="margin-top:-10px;">– %100 el dokuması üstüne baskılıdır.</p>
          <p class="product-description" style="margin-top:-10px;">–<strong> Limited edition.</strong> Ürün sınırlı sayıda üretilmiştir ve devamı yapılmayacaktır.</p>
          <div class="btn-groups" style="margin-top:40px">
            <button type="submit" productid="<?php echo $product->id; ?>" class="buy-now-btn addToCartBtnnnn">sepete ekle</button>
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