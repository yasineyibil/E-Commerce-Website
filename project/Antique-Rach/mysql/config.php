<?php
try{
    
    $db=new PDO("mysql:host=localhost;dbname=tanitim;charset=utf8","root","");
    
}
catch(PDOException $hata){
    echo $hata->getmessage();
    
    
}
?>