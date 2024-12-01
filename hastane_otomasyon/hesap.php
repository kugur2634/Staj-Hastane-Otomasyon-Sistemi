<?php

include 'header.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hastane Otomasyonu</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="hesabim_content">
            <div class="label">
                <label>ADI SOYADI</label>
                <input type="text" placeholder="<?php echo $kullanicicek['kullanici_adsoyad']; ?>">
            </div> <br>
            <div class="label">
                <label>TC NO</label>
                <input type="text" placeholder="<?php echo $kullanicicek['kullanici_tc']; ?>">
            </div> <br>
            <button type="submit">Güncelle</button>
        </div>
    </body>
</html>