<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>Satıs</title>
</head>

<body bgcolor="#d71d1d">
    <div class="kart-cont">
        <!-- navbar start -->
        <div class="navbar">
            <div class="navbar-wrapper">
                <div class="logo-wrapper">
                    <a href="WebSite.html"><img class="logo" src="images/pngkey.com-logo-honda-png-2779397.png"
                            alt="Honda Motors" /></a>
                </div>

                <div class="menu-container">
                    <ul class="menu">
                        <li class="menu-item"><a href="Modeller.html">Modeller</a></li>
                        <li class="menu-item"><a href="Fiyatlistesi.html">Fiyat Listesi</a></li>
                        <li class="menu-item"><a href="http://localhost/HtmlProje/Satıs.php">Satış</a></li>
                        <li class="menu-item"><a href="Aksesuarlar.html">Aksesuarlar</a></li>
                        <li class="menu-item"><a href="Destek.html">Destek</a></li>
                    </ul>
                </div>

                <div class="profil-container">
                    <img class="profile-pic" src="images/profilefoto.jpg" alt="Profile" />
                    <div class="profil-text-container">
                        <span class="profil-text">Hesabım</span>
                        <a class="profil-icon" href=""><i class="bi bi-justify"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar end -->
        <!-- kart bölümü -->
        <form action="bitir.php" method="POST">

            <div class="kart-container" id="kaydır2">
                <div class="kart-baslık">
                    <h1>KART BİLGİLERİ</h1>
                </div>
                <div class="kartlabel"><label for="">KART NUMARASI</label></div>
                <div class="kartinput"><input type="text" name="kartno" class="text-box"></div>
                <div class="kartlabel"><label for="">SON KULLANMA TARİHİ</label></div>
                <div class="kartinput"><input type="date" name="sonkullanmatarihi" class="text-box"></div>
                <div class="kartlabel"><label for="">CCV</label></div>
                <div class="kartinput"><input type="text" name="ccv" class="text-box"></div>
            </div>
            <div class="kart-button">
                <input type="submit" value="ONAYLA VE BİTİR" name="onaylavebitir" id="bitirbutton" class="bitir-button">
            </div>

        </form>


        <!-- footer start -->
        <footer id="footer-block" class="footer-root">

            <div class="footer-cont">
                <div class="footerlogo-cont"><a href="https://www.honda.com.tr/motosiklet"><img
                            src="images/pngkey.com-logo-honda-png-2779397.png" alt="" class="footer-logo"></a></div>

                <div class="iletisim-icon">
                    <a href="https://www.instagram.com/hondamotosiklet_tr/" class="foot-icon"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://x.com/HondaMotorTR?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                        class="foot-icon"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/HondaMotosikletTR/?locale=tr_TR" class="foot-icon"><i
                            class="bi bi-facebook"></i></a>
                </div>

                <div class="footer-p">
                    <p>&copy; 2024 Honda Motor Co., Ltd. All Rights Reserved.</p>
                </div>

            </div>




        </footer>

        <!-- footer end -->

    </div>

</body>

</html>