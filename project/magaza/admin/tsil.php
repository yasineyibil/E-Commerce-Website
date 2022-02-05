<script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
<?php
    $sayfa="Sil";
    include "inc/ahead.php";
    include "../lib/tdb.php";
    if($_GET)
    {
        $tablo= $_GET["tablo"];
        $id=(int)$_GET["id"];
        
        $sorgu=$db->prepare("DELETE FROM $tablo where id=:id");
        $sonuc=$sorgu->execute(["id"=>$id]);
        if($sonuc){
            echo "<script> Swal.fire( { title:'Başarılı!', text:'Silme Başarılı.', icon:'success', confirmButtonText:'Kapat' }).then((value)=>{
            if(value.isConfirmed){window.location.href='$tablo.php'}})</script>";
        }
    }
?>


<?php
    include "inc/footer.php";
?>