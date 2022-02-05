<?php
$sayfa = "Satın Al";
include "inc/ind-menu.php";
?>
<?php

        if (isset($_SESSION["shoppingCart"])) {

            $shoppingCart = $_SESSION["shoppingCart"];
        
            $total_count = $shoppingCart["summary"]["total_count"];
            $total_price = $shoppingCart["summary"]["total_price"];
            $shopping_products = $shoppingCart["products"];
        } else {
            $total_count = 0;
            $total_price = 0;
        }

    




?>

<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>


</br></br>
<div class="container" style="margin-top:150px">
    <main>
        <div class="py-5 text-center">
            <h2>Satın Alma İşlemi</h2>
        </div>
        </br></br>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="">Sepetin</span>
                </h4>
                <ul class="list-group mb-3">


                    <?php
                    if ($total_count < 1) {
                    ?>
                        <div class="alert alert-danger"><strong>Sepetinizde Henüz Bir Ürün Bulumamaktadır.</strong></div>
                    <?php
                    } else {
                    ?>
                        <?php
                        
                        foreach ($shopping_products as $product) {
                        ?>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0"><?php echo $product->product_name ?></h6>
                                    <small class="text-muted"><?php echo $product->count; ?> Adet</small>
                                </div>
                                <span class="text-muted"><?php echo $product->price ?> ₺</span>
                            </li>
                    <?php }
                    } ?>

                    <li class="list-group-item d-flex justify-content-between">
                        <span><strong>Toplam Tutar</strong></span>
                        <strong><?php echo $total_price ?> ₺</strong>
                    </li>
                </ul>
            </div>

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Adres Bilgileri</h4>
                    <?php
                        include "admin/config.php";
                        if ($_POST) {
                            DB::insert("INSERT INTO satinal (name, sname, mail, address, il, ilce, zcode, cardrdo, cardname, cardnumber, month, year, cvv) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
                                $_POST['name'],
                                $_POST['sname'],
                                $_POST['mail'],
                                $_POST['address'],
                                $_POST['il'],
                                $_POST['ilce'],
                                $_POST['zcode'],
                                $_POST['cardrdo'],
                                $_POST['cardname'],
                                $_POST['cardnumber'],
                                $_POST['month'],
                                $_POST['year'],
                                $_POST['cvv'],
                            ));
                            echo "<script> Swal.fire( { title:'Başarılı!', text:'Satın Aldınız', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                                                    if(value.isConfirmed){window.location.href='satinal.php?success=1'}})</script>";
                        }
                    ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <label style="color:black!important;">Adınız</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="col-sm-6">
                            <label style="color:black!important;">Soyadınız</label>
                            <input type="text" name="sname" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <label style="color:black!important;">E-posta</label>
                            <input type="email" name="mail" class="form-control" placeholder="deneme@gmail.com" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <label style="color:black!important;">Adress</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-4">
                            <label style="color:black!important;">İl</label>
                            <input type="text" name="il" class="form-control" required>
                        </div>

                        <div class="col-sm-4">
                            <label style="color:black!important;">İlçe</label>
                            <input type="text" name="ilce" class="form-control" required>
                        </div>

                        <div class="col-sm-4">
                            <label style="color:black!important;">Posta Kodu</label>
                            <input type="text" name="zcode" class="form-control" required>
                        </div>
                    </div>

                    <hr class="my-3">
                    <h4 class="mb-3 mt-3">Ödeme</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input type="radio" name="cardrdo" value="Kredi Kartı" class="form-check-input">
                            <label style="color:black!important;">Kredi Kartı</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" name="cardrdo" value="Banka Kartı" class="form-check-input">
                            <label style="color:black!important;">Banka Kartı</label>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <label style="color:black!important;">Kart Üzerindeki Ad</label>
                            <input type="text" name="cardname" class="form-control" required>
                        </div>

                        <div class="col-sm-6">
                            <label style="color:black!important;">Kart Üzerindeki Numara</label>
                            <input type="text" name="cardnumber" maxlength="16" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-4">
                            <label style="color:black!important;">Son Kulannma Tarihi</label>
                            <select name="month" class="form-select" required>
                                <option value="">Ay</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label class="text-white"></label>
                            <select name="year" class="form-select" required>
                                <option value="">Yıl</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                            </select>
                        </div>

                        <div class="col-sm-4">
                            <label style="color:black!important;">CVV</label>
                            <input type="text" maxlength="3" name="cvv" class="form-control" required>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row my-5">
                        <div class="col-12">
                            <button class="w-100 btn btn-primary">Satın Al</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>

</div>
<!--  <script type="text/javascript" src="js/form-validation.js"></script> -->
<?php
include "inc/ind-footer.php";
?>