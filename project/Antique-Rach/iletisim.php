<?php
$sayfa = "Antique Ranch | İletişim";
include "inc/menu.php";
?>
<div class="header">
    <div class="header-iletisim-img">
        <div class="header-text">
            <h1><span>bize ulasın</span></h1>
        </div>
    </div>
</div>
</div>



<div class="content" id="content" style="padding-bottom:150px; margin-bottom: 100px;">
    <div class="row" id="contatti">
        <div class="container mt-5">
            <div class="row" style="height:550px;">
                <div class="col-md-6 maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3012.567381568979!2d29.05642451566115!3d40.969055229785944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac777691393f9%3A0x2390a2caa157f5a9!2zQ2FkZGVib3N0YW4sIEthZGlyYcSfYSBTay4gMiBiLCAzNDcyOCBLYWTEsWvDtnkvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1634247846665!5m2!1str!2str" width="600" height="625" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-6">

                    <?php
                    /* verileri çekme bölümü */
                    include "mysql/config.php";
                    $sorgu = $db->prepare("select * from tiletisim");
                    $sorgu->execute();
                    while ($sonuc = $sorgu->fetch()) {
                    ?>

                        <p class="mt-4" style="margin-bottom: 0.5rem;">
                            <em><strong><?= $sonuc["bold_txt"] ?></strong></em>.
                            <?= $sonuc["text"] ?>
                        </p>
                        <p style="margin-bottom: 0.5rem;">
                            <?= $sonuc["adress"] ?></br></br>
                            <em><strong style="margin-top: 0.5rem;font-family: 'Josefin Sans', sans-serif; font-style: normal; font-weight: 600; font-size:20px;"><?= $sonuc["tel"] ?> | <a href="mailto:<?= $sonuc["mail_link"] ?>" style="font-family: 'Josefin Sans', sans-serif; font-style: normal; color:#000; font-weight: 600;"><?= $sonuc["mail"] ?></a></strong></em>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="margin-bottom: 0.5rem;">
                                    <em><strong><?= $sonuc["workingh"] ?></strong></em>
                                </p></br>
                                <p style="margin-bottom: 0.5rem;"><em><strong><?= $sonuc["socialmedia"] ?></strong></em></p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <em><strong style="font-family: 'Josefin Sans', sans-serif; font-style: normal; font-weight: 600; font-size:20px;"><?= $sonuc["bold_day"] ?> </strong><?= $sonuc["day_hours"] ?></br>
                                        <strong style="font-family: 'Josefin Sans', sans-serif; font-style: normal; font-weight: 600; font-size:20px;"><?= $sonuc["off_day"] ?></strong></em>
                                </p>
                                <p>
                                    <a href="#"><i class="fab fa-instagram instagram"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f facebook"></i></a>
                                </p>
                            </div>
                        </div>

                    <?php } ?>

                    <form action="#content" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="ad" class="form-control mt-2" placeholder="Isim" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="soyad" class="form-control mt-2" placeholder="Soyisim" required>
                                </div>
                            </div>
                            <div class="col-lg-16">
                                <div class="form-group">
                                    <input type="email" name="eposta" class="form-control mt-2" placeholder="E-posta" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="mesaj" class="form-control textarea" id="FormControlTextarea1" placeholder="Mesajınız..." rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" id="contact_sbm" name="contact_sbm" class="csubmit" value="gönder">
                            </div>
                        </div>
                        <?php

                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\SMTP;
                        use PHPMailer\PHPMailer\Exception;

                        require 'phpmailer/src/Exception.php';
                        require 'phpmailer/src/PHPMailer.php';
                        require 'phpmailer/src/SMTP.php';

                        if (isset($_POST["contact_sbm"])) {

                            $isim = $_POST['ad'];
                            $soyisim = $_POST['soyad'];
                            $email = $_POST['eposta'];
                            $mesaj = $_POST['mesaj'];
                            $mail = new PHPMailer();
                            $mail->isSMTP();
                            $mail->Host = "smtp.gmail.com";
                            $mail->SMTPAuth = true;
                            $mail->SMTPSecure = "tls";
                            $mail->Port = "587";
                            $mail->Username = "yasiin.eyibil59@gmail.com";
                            $mail->Password = "mrsister52";
                            $mail->Subject = "Tanitim Sayfasi Iletisim";
                            $mail->FromName = "$isim $soyisim";

                            $mail->setFrom('yasiin.eyibil59@gmail.com');
                            $mail->isHTML(true);
                            $mail->Body = "$email" . '<br>' . "$mesaj";
                            $mail->addAddress("antiqueranch@gmail.com");
                            if ($mail->send()) {
                                echo "</br><p style='font-family: Josefin Sans, sans-serif; font-size: 18px; font-weight: 300; line-height: 1.5625em;'>Sayın $isim $soyisim, mesajınız başarıyla gönderildi.</p>";
                                include 'mysql/config.php';
                                $ekle = $db->prepare("insert into iletisim set ad=?,soyad=?,eposta=?,mesaj=?");
                                $ekle->execute(array($isim, $soyisim, $email, $mesaj));
                            } else {
                                echo "</br><p style='margin-bottom: 0.5rem; font-family: Josefin Sans, sans-serif; font-size: 18px; font-weight: 300; line-height: 1.5625em;'>Teknik Bir akşaklık nedeniyle gönderilemedi.</p>";
                            }
                            $mail->smtpClose();
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "inc/footer.php";
?>