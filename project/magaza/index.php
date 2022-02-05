<?php
  $sayfa="Online Mağaza";
  include "inc/ind-menu.php";
  include "lib/db.php";
?>
 
  <!-- ----------- MUTFAK START ------------ -->
  <?php
        $products= $db->query("SELECT * from anasayfa where id=1", PDO::FETCH_OBJ)->fetchAll();
  ?>
  <?php  foreach ($products as $product){  ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-lg-7 bc">
          <div class="content" style="padding: 136px 55px 126px 70px">  
            <div class="eltdf-banner-simple">
              
              <div class="eltdf-banner-simple__img">
                <div class="img-holder">
                  <img width="530" height="800" src="image/<?php echo $product->img_url; ?>" alt="mutfak" sizes="(max-width: 530px) 100vw, 530px" />
                <a href="<?php echo $product->btn_url; ?>" class="img-inner" >
                  <span class="img-text"><?php echo $product->btn_txt; ?></span>            
                </a>
                </div>
              </div>    
            </div> 
          </div>
        </div>
            
    
              <div class="col-sm-12 col-lg-5 col-md-5 gizle" >
                <div class="woocommerce" style="padding: 35% 24% 0 24%" >
                    <div class="eltdf-pl-text" >
                      <ul class="products columns-4" >
                        <li class="product type-product first" style="background-color:#fff;">
                          <div class="eltdf-pl-inner">
                            <div class="eltdf-pl-image">
                              <img src="image/urunler/<?php echo $product->urun_img; ?>" width="400" height="533" 
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Çikolata Cezvesi" sizes="(max-width: 400px) 100vw, 400px"> 
                                
                                <div class="eltdf-pl-text">
                                  <div class="eltdf-pl-text-outer">
                                    <div class="eltdf-pl-text-inner" >
                                        <a href="<?php echo $product->urun_link; ?>" class="button" rel="nofollow">inceleyin</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                              <a href="<?php echo $product->urun_link ?>"></a>
                          </div>
                                  <div class="eltdf-pl-text-wrapper" >
                                    <h5 class="eltdf-product-list-title">
                                      <a href="<?php echo $product->urun_link ?>"><?php echo $product->urun_baslik; ?></a>
                                    </h5>
                                    <span class="price">
                                      <span class="woocommerce-Price-amount amount">
                                      <?php echo $product->urun_fiyat; ?> &#8378;
                                      </span>
                                    </span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
              </div>
      </div>  
    </div>
     <?php } ?>
  <!-- ----------- MUTFAK END ------------ -->

  <!-- ----------- OBJE START ------------ -->
  <?php
        $products= $db->query("SELECT * from anasayfa where id=2", PDO::FETCH_OBJ)->fetchAll();
  ?>
  <?php  foreach ($products as $product){  ?>
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-lg-5 col-md-5 gizle">
          <div class="woocommerce" style="padding: 28% 24% 0 24%">  
                <ul class="products columns-4">
                  <li class="product type-product first" style="background-color:#fff;">
                    <div class="eltdf-pl-inner"><div class="eltdf-pl-image">
                        <img src="image/urunler/<?php echo $product->urun_img; ?>" width="400" height="533" 
                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" sizes="(max-width: 400px) 100vw, 400px"/>  
                      <div class="eltdf-pl-text" >
                        <div class="eltdf-pl-text-outer">
                          <div class="eltdf-pl-text-inner">
                            <a href="<?php echo $product->urun_link; ?>" class="button" rel="nofollow">inceleyin</a></div></div></div></div>
                            <a href="<?php echo $product->urun_link; ?>"></a></div>
                            <div class="eltdf-pl-text-wrapper" >
                              <h5 class="eltdf-product-list-title">
                                <a href="<?php echo $product->urun_link; ?>"><?php echo $product->urun_baslik; ?></a>
                              </h5>
                              <span class="price">
                                <span class="woocommerce-Price-amount amount">
                                <?php echo $product->urun_fiyat; ?> &#8378;
                                </span>
                              </span>
                    </div>
                  </li>
                </ul>
                <div class="eltdf-pl-text">
              </div>
            </div>
        </div>



        <div class="col-sm-12 col-lg-7 vc ">
          <div class="content" style="padding: 136px 55px 126px 70px">   
          
            <div class="eltdf-banner-simple">
              <div class="eltdf-banner-simple__img">
                <div class="img-holder">
                  <img width="530" height="800" src="image/<?php echo $product->img_url; ?>" class="attachment-full size-full" alt="obje"/>
                <a href="<?php echo $product->btn_url; ?>" class="img-inner" >
                  <span class="img-text"><?php echo $product->btn_txt; ?></span>            
                </a>
                </div>
              </div>      
            </div>
          </div>
        </div>
      </div>  
    </div>
    <?php } ?>
  <!-- ----------- OBJE END ------------ -->

  <!-- ----------- İPEK START ------------ -->
  <?php
        $products= $db->query("SELECT * from anasayfa where id=3", PDO::FETCH_OBJ)->fetchAll();
  ?>
  <?php  foreach ($products as $product){  ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-lg-7 bc1 ">
          <div class="content" style="padding: 136px 55px 126px 70px">   
            <div class="eltdf-banner-simple">
              <div class="eltdf-banner-simple__img">
                <div class="img-holder">
                  <img width="530" height="800" src="image/<?php echo $product->img_url; ?>" class="attachment-full size-full" alt="obje"/>
                  <a href="<?php echo $product->btn_url; ?>" class="img-inner" >
                  <span class="img-text"><?php echo $product->btn_txt; ?></span>            
                </a>
                </div>
                
              </div>      
            </div>
            
          </div>
        </div>

              <div class="col-sm-12 col-lg-5 col-md-5 gizle">
                <div class="woocommerce" style="padding: 28% 24% 0 24%">
                    <div class="eltdf-pl-text">
                      <ul class="products columns-4" >
                        <li class="product type-product first" style="background-color:#fff;">
                          <div class="eltdf-pl-inner"><div class="eltdf-pl-image">
                            <img src="image/urunler/<?php echo $product->urun_img; ?>" width="400" height="533" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
                              <div class="eltdf-pl-text" >
                              <div class="eltdf-pl-text-outer">
                                <div class="eltdf-pl-text-inner">
                                  <a href="<?php echo $product->urun_link; ?>" class="button" rel="nofollow">inceleyin</a></div></div></div></div><a href="<?php echo $product->urun_link; ?>"></a></div>
                                  <div class="eltdf-pl-text-wrapper" >
                                    <h5 class="eltdf-product-list-title">
                                      <a href="<?php echo $product->urun_link; ?>"><?php echo $product->urun_baslik; ?></a>
                                    </h5>
                                    <span class="price">
                                      <span class="woocommerce-Price-amount amount">
                                      <?php echo $product->urun_fiyat; ?> &#8378;
                                      </span>
                                    </span>
                          </div>
                        </li>
                      </ul>
                      
                    </div>
                  </div>
              </div>
      </div>  
    </div>
    <?php } ?>
  <!-- ----------- İPEK END ------------ -->

  <!-- ----------- KETEN START ------------ -->
  <?php
        $products= $db->query("SELECT * from anasayfa where id=4", PDO::FETCH_OBJ)->fetchAll();
  ?>
  <?php  foreach ($products as $product){  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-5 col-md-5 gizle">
        <div class="woocommerce" style="padding: 28% 24% 0 24%">  
              <ul class="products columns-4">
                <li class="product type-product first" style="background-color:#fff;">
                  <div class="eltdf-pl-inner"><div class="eltdf-pl-image">
                    <img src="image/urunler/<?php echo $product->urun_img; ?>" width="400" height="533" 
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Çikolata Cezvesi" sizes="(max-width: 400px) 100vw, 400px">
                    <div class="eltdf-pl-text" >
                      <div class="eltdf-pl-text-outer">
                        <div class="eltdf-pl-text-inner">
                          <a href="<?php echo $product->urun_link; ?>" class="button" rel="nofollow">inceleyin</a></div></div></div></div>
                          <a href="<?php echo $product->urun_link; ?>"></a></div>
                          <div class="eltdf-pl-text-wrapper" >
                            <h5 class="eltdf-product-list-title">
                              <a href="<?php echo $product->urun_link; ?>"><?php echo $product->urun_baslik; ?></a>
                            </h5>
                            <span class="price">
                              <span class="woocommerce-Price-amount amount">
                              <?php echo $product->urun_fiyat; ?> &#8378;
                              </span>
                            </span>
                  </div>
                </li>
              </ul>
              <div class="eltdf-pl-text">
            </div>
          </div>
      </div>



      <div class="col-sm-12 col-lg-7 vc2 ">
        <div class="content" style="padding: 136px 55px 126px 70px">   
          <div class="eltdf-banner-simple">
            <div class="eltdf-banner-simple__img">
              <div class="img-holder">
                <img width="530" height="800" src="image/<?php echo $product->img_url; ?>" class="attachment-full size-full" alt="keten"/>
              <a href="<?php echo $product->btn_url; ?>" class="img-inner" >
                <span class="img-text"><?php echo $product->btn_txt; ?></span>            
              </a>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </div>  
  </div>
  <?php } ?>
  <!-- ----------- KETEN END ------------ -->

  
  
  <?php
  include "inc/ind-footer.php";
?>