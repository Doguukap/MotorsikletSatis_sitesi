<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="Satıs.css" />
    <title>Satış</title>
</head>

<body bgcolor="#d71d1d">
    <div class="satıs-container">
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

        <!-- Sell container start -->
        <form action="Satıs.php" method="POST">
            <div class="sell-container">
                <!-- segment ve model seçme bölümü -->
                <div class="segment-container">
                    <div class="segment-label"><label for="segmentler">SEGMENT</label></div>
                    <div class="segment-select">

                        <select name="segment" id="segmentler" onchange="updateDistrictsSEG()">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="model-container">
                    <div class="model-label"><label for="modeller">MODEL</label></div>
                    <div class="model-select">
                        <select name="model" id="modeller"></select>
                    </div>
                </div>
            </div>
            <div class="satıs-button">

                <input type="submit" name="sepeteekle" value="SEPETE EKLE" id="secButton" class="sec-button" />

            </div>
        </form>



        <div class="nextbuttondiv"><a href="iletisim.php"><button id="next-button">SONRAKİ</button></a></div>




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


    <script>
    const SegmentlerVeModeller = {
        "SCOOTER": ["EM1 e:", "Activa 125", "ADV350", "Dio", "PCX125", "Forza 250", "Forza 750"],
        "ADVENTURE": ["Africa Twin", "Africa Twin Adventure Sports", "Transalp", "CRF250L", "CRF250 Rally",
            "NC750X", "X-ADV"
        ],
        "NAKED": ["CB125F", "CL250", "HORNET", "MONKEY", "CB250R", "CB650R"],
        "TOURİNG": ["NT1100", "GL1800 Gold Wing Bagger", "GL1800 Gold Wing"],
        "SUPERSPORTS": ["CBR650R", "CBR1000RR-R Fireblade SP"],

    };

    window.onload = function() {
        // Segmentler dropdown'ı doldur
        const SegmentSelect = document.getElementById('segmentler');
        for (const segment in SegmentlerVeModeller) {
            let option = document.createElement('option');
            option.value = segment;
            option.textContent = segment;
            SegmentSelect.appendChild(option);
        }

    };

    // Segment seçildiğinde modelleri güncelleyen fonksiyon
    function updateDistrictsSEG() {
        const ModelSelect = document.getElementById('modeller');
        const selectedSEG = document.getElementById('segmentler').value;

        // Önce mevcut modelleri temizleyin
        ModelSelect.innerHTML = '<option value="">Model seçiniz</option>';

        if (selectedSEG) {
            const modeller = SegmentlerVeModeller[selectedSEG];
            modeller.forEach(model => {
                let option = document.createElement('option');
                option.value = model;
                option.textContent = model;
                ModelSelect.appendChild(option);
            });
        }
    }
    </script>
<?php


// Veritabanına bağlan
$baglan = mysqli_connect("localhost", "root", "", "motorsatis");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_SESSION['form_submitted'])) {
    // POST yöntemiyle gelen verileri temizle
    $segment = mysqli_real_escape_string($baglan, $_POST["segment"]);
    $model = mysqli_real_escape_string($baglan, $_POST["model"]);

    // En büyük Sipariş Numarasını bul
    $sorgu = "SELECT MAX(SiparisNo) AS max_siparis FROM segment";
    $sonuc = mysqli_query($baglan, $sorgu);
    $row = mysqli_fetch_assoc($sonuc);
    $max_siparis = $row['max_siparis'];

    // Yeni Sipariş Numarasını oluştur
    $new_siparis = $max_siparis ? $max_siparis + 1 : 1;

    // INSERT sorgusunu hazırla ve çalıştır
    $sorgu = "INSERT INTO segment (segment, model, SiparisNo) VALUES ('$segment', '$model', '$new_siparis')";
    $sonuc = mysqli_query($baglan, $sorgu);

    // Veritabanı bağlantısını kapat
    mysqli_close($baglan);

    // Formun gönderildiğini belirten session değişkeni oluştur
    $_SESSION['form_submitted'] = true;

    // Yönlendirme yap
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
} else {
    // Formun yeniden gönderilmesini önlemek için session değişkenini temizle
    unset($_SESSION['form_submitted']);
}
?>








</body>

</html>