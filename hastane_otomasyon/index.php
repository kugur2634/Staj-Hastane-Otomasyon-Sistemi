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
            <h1>Giriş Yap</h1>
            <form action="islem.php" method="post">
                <div class="user">
                    <input type="text" name="kullanici_tc" placeholder="Tc Kimlik No" maxlength="11">
                </div>
                <div class="pass">
                    <input type="password" name="kullanici_password" placeholder="Şifre" maxlength="30">
                </div>
                <button type="submit" class="sub" id="giris" name="giris_yap">Giriş Yap</button>
                <br>
            </form>
            <a href="uye.php"><button type="submit" class="sub" id="uye">Üye Ol</button></a>
        </div>
    </body>
</html>