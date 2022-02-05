<!-- ----------- MENU START ------------ -->
<?php
$sayfa = "İletişim";
include "inc/ind-menu.php";
?>
<!-- ----------- MENU END ------------ -->

<!-- ----------- CONTENT START ------------ -->
<?php
include "lib/db.php";
$sorgu = $db->prepare("select * from iletisim");
$sorgu->execute();
$sonuc = $sorgu->fetch();
?>
<section style="margin-top:250px; margin-bottom:50px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 timeline-content js--fadeInLeft" data-wow-delay=".2s">
        <h1 class="section-title"><?= $sonuc["baslik"] ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mt-3 timeline-content js--fadeInLeft" data-wow-delay=".2s">
        <p style="font-family: josefin; font-size:1rem;"><?= $sonuc["ust_txt"] ?></p>

        <div class="find-widget">
          <?= $sonuc["txt"] ?>
        </div>
        <div class="find-widget">
          <?= $sonuc["tel"] ?>
        </div>
        <div class="find-widgets">
          <a href="mailto:<?= $sonuc["email_url"] ?>"><?= $sonuc["email"] ?></a>
        </div>
      </div>
      <div class="col-md-6 timeline-content js--fadeInRight" data-wow-delay=".2s">
        <form action="#iletisim" class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
          <div class="form-group label-floating" id=iletisim>
            <label class="control-label" for="name">İsim</label>
            <input class="form-control" id="name" type="text" name="name" required data-error="Lütfen adınızı yazınız">
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group label-floating">
            <label class="control-label" for="email">E-posta</label>
            <input class="form-control" id="email" type="email" name="email" required data-error="Lütfen e-postanızı giriniz">
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group label-floating">
            <label for="message" class="control-label">Mesajınız</label>
            <textarea class="form-control" rows="3" id="message" name="message" required data-error="Mesajınızı yazın"></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-submit mt-5">
            <div class="eltdf-pl-text-inner">
              <button class="button" type="submit" id="form-submit" name="cnt-sbm"><i class="material-icons mdi mdi-message-outline"></i>gönder</button>
            </div>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
          </div>
          <?php
          include 'db/config.php';

          use PHPMailer\PHPMailer\PHPMailer;
          use PHPMailer\PHPMailer\SMTP;
          use PHPMailer\PHPMailer\Exception;

          require 'phpmailer/src/Exception.php';
          require 'phpmailer/src/PHPMailer.php';
          require 'phpmailer/src/SMTP.php';

          if (isset($_POST["cnt-sbm"])) {

            $ad = $_POST['name'];
            $email = $_POST['email'];
            $mesaj = $_POST['message'];

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = "yasiin.eyibil59@gmail.com";
            $mail->Password = "mrsister52";
            $mail->Subject = "Magaza Iletisim";
            $mail->FromName = "$ad";

            $mail->setFrom('yasiin.eyibil59@gmail.com');
            $mail->isHTML(true);
            $mail->Body = "$email" . '<br>' . "$mesaj";
            $mail->addAddress("antiqueranch@gmail.com");
            if ($mail->send()) {
              echo "</br><p style='font-family:josefin; font-size: 1rem; '>Sayın $ad,
                              mesajınız başarıyla gönderildi.</p>";
              $ekle = $db->prepare("insert into magazailetisim set isim=?, mail=?, mesaj=?");
              $ekle->execute(array($ad, $email, $mesaj));
            } else {
              echo "</br><p style='margin-bottom: 0.5rem; font-family: Josefin Sans, sans-serif; font-size: 18px; font-weight: 300; line-height: 1.5625em;'>
                                Teknik Bir akşaklık nedeniyle gönderilemedi.</p>";
            }
            $mail->smtpClose();
          }
          ?>
        </form>
      </div>
    </div>
  </div>
</section>



<!-- ----------- CONTENT END ------------ -->



<!-- ----------- FOOTER START ------------ -->

<?php
include "inc/ind-footer.php";
?>