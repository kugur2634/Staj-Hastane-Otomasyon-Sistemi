<?php

try{
    $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8", 'root', '');
    //echo 'veri tabanı bağlantısı başarılı'; //kontrol
} 
catch(Exception $e){
    echo $e -> getMessage();
}

?>