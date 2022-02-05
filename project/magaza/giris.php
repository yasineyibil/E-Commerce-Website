<!-- ----------- MENU START ------------ -->
<?php
$sayfa = "Giriş";
include "inc/ind-menu.php";
?>
<!-- ----------- MENU END ------------ -->

<!-- ----------- CONTENT START ------------ -->
<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
<div class="container" style="margin-top:250px; margin-bottom:50px; ">
  <div class="login-form">
    <form action="giris.php" method="post">
      <h1>Giris</h1>
      <p>
        Hesabınız Yokmu
        <a href="kyt-ol.php">Kayıt Ol</a>
      </p>
      <label for="email">E-posta adresi *</label>
      <input type="email" placeholder="E-postanızı Girin" minlength="10" maxlength="90" name="mail" value="<?= @$gelenmail ?>" />
      <label for="psw">Parola *</label>
      <input type="password" placeholder="Parolanızı Girin" minlength="6" maxlength="40" name="password" />
      <label>
        <input type="checkbox" name="benihatirla" style="margin-bottom: 15px" />
        Beni hatırla
      </label>
      <p>
        <a href="#">Sifrenizi mi unuttunuz?</a>
      </p>

      <?php
      include 'lib/setting.php';

      if ($_POST) {
        $gelenmail = $_POST['mail'];
        $gelenpsw = $_POST['password'];
        if ($gelenmail != "" and $gelenpsw != "") {
          $kullanicikontrol = $DBConnection->prepare("SELECT * FROM kullanici WHERE mail = ? and password = ?");
          $kullanicikontrol->execute([$gelenmail, $gelenpsw]);
          $result = $kullanicikontrol->fetch(PDO::FETCH_ASSOC);
          $kullanicikontrolsayi = $kullanicikontrol->rowCount();

          if ($kullanicikontrolsayi > 0) {
            if ($result['yetki'] == 0) {
              $_SESSION['Kullanici'] = $gelenmail;
              $_SESSION['yetki'] = $result['yetki'];
              echo "<script>
                        Swal.fire('Başarılı!', 'Giriş başarılı lütfen bekleyin', 'success')
                    </script>";
              header("refresh:2;url=index.php");
            } else if ($result['yetki'] == 1) {
              $_SESSION['Kullanici'] = $gelenmail;
              $_SESSION['yetki'] = $result['yetki'];
              echo "<script>
                        Swal.fire('Başarılı!', 'Admin Girişi başarılı lütfen bekleyin', 'success')
                    </script>";
              header("refresh:2;url=admin/index.php");
            } else {
              echo "<script>
                            Swal.fire('Hata!', 'Geçersiz yetki herhangi bir işlem yapılmadı!', 'error')
                        </script>";
            }
          } else {
            echo "<script>
                    Swal.fire('Hata!', 'E-posta veya parola hatalı', 'error')
                </script>";
          }
        } else {
          echo "<script>
                    Swal.fire('Hata!', 'Boş gönderemezsiniz', 'error')
                </script>";
        }
      }
      ?>
      <div class="buttons">
        <button type="submit" name="giris" class="signupbtn">giriş yap</button>
      </div>
      <p style="color:transparent;">Kişisel verileriniz,
        gizlilik ilkesi sayfasında belirtildiği şekilde işlenecek ve kaydedilecektir.
      </p>
    </form>
  </div>
</div>

<!-- ----------- CONTENT END ------------ -->

<!-- ----------- FOOTER START ------------ -->

<?php
include "inc/ind-footer.php";
?>