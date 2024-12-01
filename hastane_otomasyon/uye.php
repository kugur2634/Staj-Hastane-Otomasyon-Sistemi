<!DOCTYPE html>
<html lang="tr">
    <head>
        <title>Hastane Otomasyon</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h2>Hastane Otomasyon</h2>
        </header>
        <div class="tableOuter">
            <h1>Üye Ol</h1>
            <form action="islem.php" method="post">
            <div class="user">
                    <input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad" maxlength="30">
                </div>
                <div class="user">
                    <input type="text" name="kullanici_tc" placeholder="Tc Kimlik No" maxlength="11">
                </div>
                <div class="pass">
                    <input type="password" name="kullanici_password" placeholder="Şifre" maxlength="30">
                </div>
                <button type="submit" class="sub" id="giris" name="kullanicikaydet">Üye Ol</button>
                <br>
            </form>
            <a href="index.php"><button type="submit" class="sub" id="uye">Geri Çık</button></a>
        </div>
    </body>
</html>