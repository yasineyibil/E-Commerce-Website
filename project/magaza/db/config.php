<?php
try{
    $db= new PDO("mysql:host=localhost;dbname=magaza;charset=utf8","root","");
    
}
catch(PDOException $hata){
    echo $hata->getmessage();
    
    
}
?>