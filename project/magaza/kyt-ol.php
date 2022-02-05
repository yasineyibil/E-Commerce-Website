<?php
  $sayfa="Kayıt Ol";
  include "inc/ind-menu.php";
?>
<!-- ----------- MENU END ------------ -->

<!-- ----------- CONTENT START ------------ -->
<div class="container" style="margin-top:250px; margin-bottom:50px;  ">
    <div class="login-form" >
      
        <form  action="#kayit" method="post">
          <h1  id="kayit">Kayıt Ol</h1>
          <p >
            Zaten hesabınız varmı?
            <a href="giris.php">Giriş yap</a>
          </p>
          <label for="email">Adınız*</label>
          <input type="text" placeholder="Adınızı girin" maxlength="260" name="name" required />
          <label for="email">Soyadınız*</label>
          <input type="text" placeholder="Soyadınızı girin" maxlength="260" name="sname" required />
          <label for="email">E-posta adresi *</label>
          <input type="email" placeholder="E-postanızı Girin" minlength="10" maxlength="255" name="email" required />
          <label for="psw">Parola *</label>
          <input type="password" placeholder="Parolanızı Girin" minlength="6" maxlength="255" name="psw" required/>
          </label>
          <p>Kişisel verileriniz, 
            <a href="#">gizlilik ilkesi</a> sayfasında belirtildiği şekilde işlenecek ve kaydedilecektir.
          </p>
          <div class="buttons">
            <button type="submit" name="kyt-ol" class="signupbtn">üye ol</button>
          </div>
          <?php
                                    include 'db/config.php';
                                        if(isset($_POST['kyt-ol']))
                                        {
                                            $ad= $_POST['name'];
                                            $soyad= $_POST['sname'];
                                            $mail= $_POST['email'];
                                            $sifre= $_POST['psw'];

                                            $ekle= $db-> prepare("insert into kullanici set ad=?, soyad=?, mail=?, password=?");
                                            $ekle-> execute(array($ad, $soyad, $mail, $sifre));
                                            if($ekle){
                                            
                                                    
                                                echo "<div class='kyt-txt-g'>Kayıt Olundu</div>";
                                            
                                            }
                                            else
                                            echo "<div class='kyt-txt-r'>Eklenemedi</div>";
                                        }
                                        ?>
        </form>
    </div>
</div>
<!-- ----------- CONTENT END ------------ -->

<!-- ----------- FOOTER START ------------ -->

<?php
  include "inc/ind-footer.php";
?>