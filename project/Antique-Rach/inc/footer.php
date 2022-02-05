<div class="mt-5 pt-5 pb-5 footer" id="footers">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <h2>hakkında</h2>
                                <p class="pr-5" style="margin-bottom: 1rem; text-align:left; font-family: 'Josefin Sans', sans-serif; font-style: normal; font-weight: 300; font-size: 1rem; color: #818181; word-wrap: break-word;">Hayat, Antique Ranch'te farklı bir hızda akıyor. Dış dünyanın kargaşası, kaosu, kapının ardında kalıyor; günün kavgalarından uzak, sanatla ve tarihle iç içe bir küçük evren, nefes almak isteyenleri bekliyor.                                    </br>
                                    <a href="#"><i class="fab fa-instagram instagram"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f facebook"></i></a>
                                    <a href="mailto:yasin.eyibil@gmail.com"><i class="fas fa-envelope mail"></i></a>
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="mt-lg-0 mt-sm-3" style="text-align: center;">
                                    <img  src="image/logo.png" alt="" width="200px">
                                </h4>
                                <p style="margin-bottom: 0.5rem; text-align:center;  font-family: 'Josefin Sans', sans-serif; font-style: normal; font-weight: 300; font-size: 1rem; color: #818181; word-wrap: break-word;" >
                                    E-posta listemize kayıt olarak Ranch’deki</br> yeniliklerden ve etkinliklerden haberdar olabilirsiniz!
                                </p>
                                <form method="post" action="#footers" style="text-align:center;">
                                    <p>
                                        <input class="footer_mail" id="footer_mail" type="email" name="footer_email" placeholder="E-posta" required>
                                    </p>
                                    <p>
                                        <input type="submit" name="footerbtn"  class="footer-mail-submit" value="kayıt ol">  
                                        <?php
                                    include 'mysql/config.php';
                                        if(isset($_POST['footerbtn']))
                                        {
                                            $mail= $_POST['footer_email'];

                                            $ekle= $db-> prepare("insert into footer set mail=?");
                                            $ekle-> execute(array($mail));
                                            if($ekle){
                                            
                                                    
                                                echo "<div class='footerp'>Kayıt Olundu</div>";
                                            
                                            }
                                            else
                                            echo "eklenmedi";
                                        }
                                        ?>
                                    </p>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <h2>antique ranch @ instagram</h2>
                                <div  class="row" >
                                    <div class="col">
                                        <a href="https://www.instagram.com/p/CUz_l32qobA/" target="_blank" >
                                        <figure> <img class="frc-l" alt=""/></figure>
                                        </a>
                                    </div>
                                    <div  class="col">
                                        <a href="https://www.instagram.com/p/CShgwhNqQK4/" target="_blank" >
                                        <figure> <img class="frc-c" alt=""/></figure>
                                        </a>
                                    </div>
                                    <div  class="col" >
                                        <a href="https://www.instagram.com/p/CUxg_PNq3NN/" target="_blank" >
                                        <figure> <img class="frc-r" alt=""/></figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" align="center">
                                        <div class="follow">
                                     <a href="#"><i class="fab fa-instagram instagrams"></i>Bizi takip edin</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
        <div class="footer-inline">
            <p>2021 © Antique Ranch. Tüm hakları saklıdır.</p>
        </div>
        <div id="top">
                <i width="50" height="50" class="fa fa-angle-double-up"></i>
            </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="js.js"></script>
<script src="bootstrap.js"></script>

  </body>
</html>
