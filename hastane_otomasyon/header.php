<?php

ob_start();
session_start();

include 'baglanti.php';

//giriş yapmadan anasayfaya gitmeyi engelleme

$kullanicisor = $db -> prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicisor -> execute([
    'kullanici_tc' => $_SESSION['userkullanici_tc']
]);
$say = $kullanicisor ->rowCount();
$kullanicicek = $kullanicisor -> fetch(PDO::FETCH_ASSOC);

if($say==0)
{
    header('location:index.php?izinsiz');
    exit;
}

?>


<!DOCTYPE html>
<html lang="tr">
    <head>
        <title>Hastane Otomasyon</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="ust_bar">
            <a href="anasayfa.php"><h1>Hastane Otomasyon</h1></a>
            <div class="menu">
                <a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
                <a href="randevu.php"><h5>Randevu Bilgileri</h5></a>
            </div>
        </div>
        <div class="cikis">
            <a href="index.php"><h5>Çıkış Yap</h5></a>
        </div>
    </body>
</html>