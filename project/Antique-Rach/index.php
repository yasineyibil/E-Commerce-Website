<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/all.css"/>
    <link rel="stylesheet" type="text/css" href="font/font.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:100">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
    <link rel="manifest" href="image/favicon/site.webmanifest">
    <title>Antique Ranch | Anasayfa</title>
    <style>
      
      /*  CSS DE ALGİLAMİYOR BOOSTRAP BASTİRİYOR BURADAN SİLME  */
      .slideshow-text {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 100;
          font-size: 60px;
          width: 100vw;
          text-align: center;
          color: #fff;
          font-family: 'Roboto Condensed', sans-serif;
          font-weight: 100;
          pointer-events: none;
          text-transform: uppercase;
          letter-spacing: 11px;
          line-height: 0.8;
          text-shadow: 1px 1px 3px #978757;
        }
        @media screen and (min-device-width: 768px) and (max-width: 798.98px) {
          .slideshow-text {
            font-size: 38px;
            letter-spacing: 10px;
        }
        }
        @media screen and (min-device-width: 496px) and (max-width: 767.98px) {
          .slideshow-text {
            font-size: 30px;
            letter-spacing: 10px;
        }
        }
        @media screen and (min-device-width: 376px) and (max-width: 495.98px) {
          .slideshow-text {
            font-size: 20px;
            letter-spacing: 8px;
        }
        }
        @media screen and (min-device-width: 0px) and (max-width: 375.98px) {
          .slideshow-text {
            font-size: 15px;
            letter-spacing: 6px;
        }
        }
      </style>
  </head>
  <body>
<div class="kapsayici">
            <div class="header-container">
            <nav class="main-navigation" id="menucontainer" >
                <div id="animations">
                    <div class="logo">
                        <a href="index.php"><img src="image/logo.png" alt="LOGO" style="width:90px; margin-left: 30px;">
                        <h3 id="logorenk"> antique ranch </h3></a>
                    </div>
                    <div >
                        <div class="mobile-menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        <div class="menu">
                            <ul class="main-menu">
                                <li><a  href="hakkinda.php">manifesto</a></li>
                                <li><a  href="magaza.php">magaza</a></li>
                                <li><a  href="atolye.php">atölye</a></li>
                                <li><a  href="depo.php">depo</a></li>
                                <li><a  href="iletisim.php"><i class="fas fa-external-link-alt"></i> iletisim</a></li>
                                <li><a  href="../magaza/index.php"><i class="fas fa-external-link-alt"></i> online magaza</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="col-xs-12">
                        <div class="responsive-menu"></div>
                    </div>
            </nav>  
  

    <div class="split-slideshow">
        <div class="slideshow">
          <div class="slider">
            <div class="item">
              <img src="image/hakkinda.jpg" />
            </div>
            <div class="item">
              <img src="image/antika-magaza.jpg.webp" />
            </div>
            <div class="item">
              <img src="image/atolye.jpg.webp" />
            </div>
            <div class="item">
              <img src="image/depo.webp" />
            </div>
          </div>
        </div>
      <div class="slideshow-text">
        <div class="item">ranch Beylerbeyi</div>
        <div class="item">antika magazası</div>
        <div class="item">sanat atolyesi</div>
        <div class="item">ranch depo</div>
      </div>
    </div>
  


</div>
    <script src="bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="js.js"></script>
    <script>
      var $slider = $('.slideshow .slider'),
          maxItems = $('.item', $slider).length,
          dragging = false,
          tracking,
          rightTracking;

        $sliderRight = $('.slideshow').clone().addClass('slideshow-right').appendTo($('.split-slideshow'));

        rightItems = $('.item', $sliderRight).toArray();
        reverseItems = rightItems.reverse();
        $('.slider', $sliderRight).html('');
        for (i = 0; i < maxItems; i++) {
          $(reverseItems[i]).appendTo($('.slider', $sliderRight));
        }

        $slider.addClass('slideshow-left');
        $('.slideshow-left').slick({
          vertical: true,
          verticalSwiping: true,
          arrows: false,
          infinite: true,
          dots: true,
          speed: 1000,
          cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
        }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {

          if (currentSlide > nextSlide && nextSlide == 0 && currentSlide == maxItems - 1) {
            $('.slideshow-right .slider').slick('slickGoTo', -1);
            $('.slideshow-text').slick('slickGoTo', maxItems);
          } else if (currentSlide < nextSlide && currentSlide == 0 && nextSlide == maxItems - 1) {
            $('.slideshow-right .slider').slick('slickGoTo', maxItems);
            $('.slideshow-text').slick('slickGoTo', -1);
          } else {
            $('.slideshow-right .slider').slick('slickGoTo', maxItems - 1 - nextSlide);
            $('.slideshow-text').slick('slickGoTo', nextSlide);
          }
        }).on("mousewheel", function(event) {
          event.preventDefault();
          if (event.deltaX > 0 || event.deltaY < 0) {
            $(this).slick('slickNext');
          } else if (event.deltaX < 0 || event.deltaY > 0) {
            $(this).slick('slickPrev');
          };
        }).on('mousedown touchstart', function(){
          dragging = true;
          tracking = $('.slick-track', $slider).css('transform');
          tracking = parseInt(tracking.split(',')[5]);
          rightTracking = $('.slideshow-right .slick-track').css('transform');
          rightTracking = parseInt(rightTracking.split(',')[5]);
        }).on('mousemove touchmove', function(){
          if (dragging) {
            newTracking = $('.slideshow-left .slick-track').css('transform');
            newTracking = parseInt(newTracking.split(',')[5]);
            diffTracking = newTracking - tracking;
            $('.slideshow-right .slick-track').css({'transform': 'matrix(1, 0, 0, 1, 0, ' + (rightTracking - diffTracking) + ')'});
          }
        }).on('mouseleave touchend mouseup', function(){
          dragging = false;
        });

        $('.slideshow-right .slider').slick({
          swipe: false,
          vertical: true,
          arrows: false,
          infinite: true,
          speed: 950,
          cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
          initialSlide: maxItems - 1
        });
        $('.slideshow-text').slick({
          swipe: false,
          vertical: true,
          arrows: false,
          infinite: true,
          speed: 900,
          cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
        });
    </script>
  </body>
</html>
