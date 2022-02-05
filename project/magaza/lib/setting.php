<?php

try{
    $DBConnection= new PDO("mysql:host=localhost;dbname=magaza;charset=utf8",'root', '');
}
catch(PDOException $e){
    echo $e->getMessage();
}


if(isset($_SESSION['Kullanici'])){
    $kullanicibilgiler = $DBConnection->prepare("SELECT * FROM kullanici WHERE mail = ? LIMIT 1");
    $kullanicibilgiler->execute([$_SESSION['Kullanici']]);
    $kullanicibilgilerSayisi = $kullanicibilgiler->rowCount();
    $kullanicibilgi = $kullanicibilgiler->fetch(PDO::FETCH_ASSOC);
    if($kullanicibilgilerSayisi > 0){
        $kullaniciadi= $kullanicibilgi['ad'];
        $kullanicisoyad= $kullanicibilgi['soyad'];
        $kullancimail=$kullanicibilgi['mail'];
    }
}






?>