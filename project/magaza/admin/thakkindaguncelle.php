<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
$sayfa = "Hakkında Güncelle";
include "inc/ahead.php";

include "../lib/tdb.php";
/* verileri çekme bölümü */
$sorgu = $db->prepare("select * from thakkinda where id=:id");
$sorgu->execute(['id' => (int)$_GET["id"]]);
$sonuc = $sorgu->fetch();


// veri güncelleme

if ($_POST) {
    $guncellesorgu = $db->prepare("UPDATE thakkinda SET 
        bold_txt=:bold_txt,
        txt=:txt,
        bold_txt2=:bold_txt2,
        txt2=:txt2,
        bold_txt3=:bold_txt3,
        txt3=:txt3,
        bold_txt4=:bold_txt4,
        txt4=:txt4,
        bold_txt5=:bold_txt5,
        txt5=:txt5,
        bold_txt6=:bold_txt6,
        txt6=:txt6,
        txt7=:txt7,
        bold_txt7=:bold_txt7
        WHERE id=:id");

    $guncelle = $guncellesorgu->execute([
        'bold_txt' => $_POST["bold_txt"],
        'txt' => $_POST["txt"],
        'bold_txt2' => $_POST["bold_txt2"],
        'txt2' => $_POST["txt2"],
        'bold_txt3' => $_POST["bold_txt3"],
        'txt3' => $_POST["txt3"],
        'bold_txt4' => $_POST["bold_txt4"],
        'txt4' => $_POST["txt4"],
        'bold_txt5' => $_POST["bold_txt5"],
        'txt5' => $_POST["txt5"],
        'bold_txt6' => $_POST["bold_txt6"],
        'txt6' => $_POST["txt6"],
        'txt7' => $_POST["txt7"],
        'bold_txt7' => $_POST["bold_txt7"],
        'id' => (int)$_GET["id"]
    ]);
}

if (@$guncelle) {
    echo "<script> Swal.fire( { title:'Başarılı!', text:'Başarıyla Güncellediniz.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
                if(value.isConfirmed){window.location.href='thakkinda.php'}})</script>";
}

?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $sayfa ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Hakkında / <?= $sayfa ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Kalın Metin</label>
                        <input type="text" name="bold_txt" required class="form-control" value="<?= $sonuc["bold_txt"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Metin</label>
                        <input type="text" name="txt" required class="form-control" value="<?= $sonuc["txt"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Kalın Metin 2</label>
                        <input type="text" name="bold_txt2" required class="form-control" value="<?= $sonuc["bold_txt2"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Metin 2</label>
                        <input type="text" name="txt2" required class="form-control" value="<?= $sonuc["txt2"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Kalın Metin 3</label>
                        <input type="text" name="bold_txt3" required class="form-control" value="<?= $sonuc["bold_txt3"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Metin 3</label>
                        <input type="text" name="txt3" required class="form-control" value="<?= $sonuc["txt3"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Kalın Metin 4</label>
                        <input type="text" name="bold_txt4" required class="form-control" value="<?= $sonuc["bold_txt4"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Metin 4</label>
                        <input type="text" name="txt4" required class="form-control" value="<?= $sonuc["txt4"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Kalın Metin 5</label>
                        <input type="text" name="bold_txt5" required class="form-control" value="<?= $sonuc["bold_txt5"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Metin 5</label>
                        <input type="text" name="txt5" required class="form-control" value="<?= $sonuc["txt5"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Kalın Metin 6</label>
                        <input type="text" name="bold_txt6" required class="form-control" value="<?= $sonuc["bold_txt6"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Metin 6</label>
                        <input type="text" name="txt6" required class="form-control" value="<?= $sonuc["txt6"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Metin 7</label>
                        <input type="text" name="txt7" required class="form-control" value="<?= $sonuc["txt7"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <label for="">Kalın Metin 7</label>
                        <input type="text" name="bold_txt7" required class="form-control" value="<?= $sonuc["bold_txt7"] ?>">
                    </div>
                    <div class="form-group" style="margin-top:15px;">
                        <input type="submit" value="guncelle" class="btn btn-primary">
                    </div>








                </form>
            </div>
        </div>
    </div>
</main>
<?php
include "inc/footer.php";
?>