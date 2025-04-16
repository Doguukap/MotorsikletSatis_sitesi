<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iletisim.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>Satıs</title>
</head>

<body bgcolor="#d71d1d">
    <div class="iletisim-cont">
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
        <!-- ileştisim bölümü -->
        <form action="iletisim.php" method="POST">
            <div class="iletisim-container" id="kaydır1">
                <div class="İletisim-boxes">
                    <div class="iletisim-baslık">
                        <h1>İLETİSİM BİLGİLERİ</h1>
                    </div>
                    <div class="iletisimlabel"><label for="">AD</label></div>
                    <div class="iletisiminput"><input type="text" name="ad" class="text-box" /></div>
                    <div class="iletisimlabel"><label for="">SOYAD</label></div>
                    <div class="iletisiminput"><input type="text" name="soyad" class="text-box" /></div>
                    <div class="iletisimlabel"><label for="">TELEFON</label></div>
                    <div class="iletisiminput"><input type="tel" name="telefon" class="text-box" /></div>
                    <div class="iletisimlabel"><label for="">EMAİL</label></div>
                    <div class="iletisiminput"><input type="text" name="email" class="text-box" /></div>
                </div>
                <div class="adres-boxes">
                    <div class="iletisim-baslık">
                        <h1>ADRES BİLGİLERİ</h1>
                    </div>
                    <div class="adreslabel"><label for="il">İL</label></div>
                    <div class="adresinput"><select name="il" id="iller" onchange="updateDistricts()">
                            <option value=""></option>
                        </select></div>
                    <div class="adreslabel"><label for="ilce">İLCE</label></div>
                    <div class="adresinput"><select name="ilce" id="ilceler"></select></div>
                    <div class="adreslabel"><label for="adres">ADRES</label></div>
                    <div class="adresinput"><input type="text" name="adres" class="text-box" /></div>
                </div>
            </div>
            <div class="adres-button">
                <input type="submit" value="ONAYLA" name="onayla" id="onaylabutton" class="onayla-button">
            </div>
        </form>

        <div class="sonrakibuttondiv"><a href="kart.php"><button id="sonraki-button">SONRAKİ</button></a></div>

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
    const illerVeIlceler = {
        "Adana": ["Aladağ", "Ceyhan", "Çukurova", "Feke", "İmamoğlu", "Karaisalı", "Karataş", "Kozan", "Pozantı",
            "Saimbeyli", "Sarıçam", "Seyhan", "Tufanbeyli", "Yumurtalık", "Yüreğir"
        ],
        "Adıyaman": ["Besni", "Çelikhan", "Gerger", "Gölbaşı", "Kahta", "Merkez", "Samsat", "Sincik", "Tut"],
        "Afyonkarahisar": ["Başmakçı", "Bayat", "Bolvadin", "Çay", "Çobanlar", "Dazkırı", "Dinar", "Emirdağ",
            "Evciler", "Hocalar", "İhsaniye", "İscehisar", "Kızılören", "Sandıklı", "Sinanpaşa", "Sultandağı",
            "Şuhut", "Merkez"
        ],
        "Ağrı": ["Diyadin", "Doğubayazıt", "Eleşkirt", "Hamur", "Patnos", "Taşlıçay", "Tutak", "Merkez"],
        "Amasya": ["Göynücek", "Gümüşhacıköy", "Hamamözü", "Merzifon", "Suluova", "Taşova", "Merkez"],
        "Ankara": ["Altındağ", "Ayaş", "Balâ", "Beypazarı", "Çamlıdere", "Çankaya", "Çubuk", "Elmadağ", "Güdül",
            "Haymana", "Kalecik", "Kızılcahamam", "Nallıhan", "Polatlı", "Şereflikoçhisar", "Yenimahalle",
            "Gölbaşı", "Keçiören", "Mamak", "Sincan", "Kazan", "Akyurt", "Etimesgut", "Evren", "Pursaklar"
        ],
        "Antalya": ["Akseki", "Alanya", "Demre", "Döşemealtı", "Finike", "Gazipaşa", "Gündoğmuş", "İbradı", "Kaş",
            "Kemer", "Kepez", "Konyaaltı", "Korkuteli", "Kumluca", "Manavgat", "Muratpaşa", "Serik"
        ],
        "Artvin": ["Ardanuç", "Arhavi", "Borçka", "Hopa", "Murgul", "Şavşat", "Yusufeli", "Merkez"],
        "Aydın": ["Bozdoğan", "Buharkent", "Çine", "Didim", "Efeler", "Germencik", "İncirliova", "Karacasu",
            "Karpuzlu", "Koçarlı", "Köşk", "Kuşadası", "Kuyucak", "Nazilli", "Söke", "Sultanhisar", "Yenipazar"
        ],
        "Balıkesir": ["Altıeylül", "Ayvalık", "Balya", "Bandırma", "Bigadiç", "Burhaniye", "Dursunbey", "Edremit",
            "Erdek", "Gömeç", "Gönen", "Havran", "İvrindi", "Karesi", "Kepsut", "Manyas", "Marmara",
            "Savaştepe", "Sındırgı", "Susurluk"
        ],
        "Bilecik": ["Bozüyük", "Gölpazarı", "İnhisar", "Osmaneli", "Pazaryeri", "Söğüt", "Yenipazar", "Merkez"],
        "Bingöl": ["Adaklı", "Genç", "Karlıova", "Kiğı", "Solhan", "Yayladere", "Yedisu", "Merkez"],
        "Bitlis": ["Adilcevaz", "Ahlat", "Güroymak", "Hizan", "Mutki", "Tatvan", "Merkez"],
        "Bolu": ["Dörtdivan", "Gerede", "Göynük", "Kıbrıscık", "Mengen", "Mudurnu", "Seben", "Yeniçağa", "Merkez"],
        "Burdur": ["Ağlasun", "Altınyayla", "Bucak", "Çavdır", "Çeltikçi", "Gölhisar", "Karamanlı", "Kemer",
            "Tefenni", "Yeşilova", "Merkez"
        ],
        "Bursa": ["Büyükorhan", "Gemlik", "Gürsu", "Harmancık", "İnegöl", "İznik", "Karacabey", "Keles", "Kestel",
            "Mudanya", "Mustafakemalpaşa", "Nilüfer", "Orhaneli", "Orhangazi", "Osmangazi", "Yenişehir",
            "Yıldırım"
        ],
        "Çanakkale": ["Ayvacık", "Bayramiç", "Biga", "Bozcaada", "Çan", "Eceabat", "Ezine", "Gelibolu", "Gökçeada",
            "Lapseki", "Yenice", "Merkez"
        ],
        "Çankırı": ["Atkaracalar", "Bayramören", "Çerkeş", "Eldivan", "Ilgaz", "Kızılırmak", "Korgun", "Kurşunlu",
            "Orta", "Şabanözü", "Yapraklı", "Merkez"
        ],
        "Çorum": ["Alaca", "Bayat", "Boğazkale", "Dodurga", "İskilip", "Kargı", "Laçin", "Mecitözü", "Oğuzlar",
            "Ortaköy", "Osmancık", "Sungurlu", "Uğurludağ", "Merkez"
        ],
        "Denizli": ["Acıpayam", "Babadağ", "Baklan", "Bekilli", "Beyağaç", "Bozkurt", "Buldan", "Çal", "Çameli",
            "Çardak", "Çivril", "Güney", "Honaz", "Kale", "Merkezefendi", "Pamukkale", "Sarayköy", "Serinhisar",
            "Tavas"
        ],
        "Diyarbakır": ["Bağlar", "Bismil", "Çermik", "Çınar", "Çüngüş", "Dicle", "Eğil", "Ergani", "Hani", "Hazro",
            "Kayapınar", "Kocaköy", "Kulp", "Lice", "Silvan", "Sur", "Yenişehir"
        ],
        "Edirne": ["Enez", "Havsa", "İpsala", "Keşan", "Lalapaşa", "Meriç", "Süloğlu", "Uzunköprü", "Merkez"],
        "Elazığ": ["Ağın", "Alacakaya", "Arıcak", "Baskil", "Karakoçan", "Keban", "Kovancılar", "Maden", "Palu",
            "Sivrice", "Merkez"
        ],
        "Erzincan": ["Çayırlı", "İliç", "Kemah", "Kemaliye", "Otlukbeli", "Refahiye", "Tercan", "Üzümlü", "Merkez"],
        "Erzurum": ["Aşkale", "Aziziye", "Çat", "Hınıs", "Horasan", "İspir", "Karaçoban", "Karayazı", "Köprüköy",
            "Narman", "Oltu", "Olur", "Palandöken", "Pasinler", "Pazaryolu", "Şenkaya", "Tekman", "Tortum",
            "Uzundere", "Yakutiye"
        ],
        "Eskişehir": ["Alpu", "Beylikova", "Çifteler", "Günyüzü", "Han", "İnönü", "Mahmudiye", "Mihalgazi",
            "Mihalıççık", "Odunpazarı", "Sarıcakaya", "Seyitgazi", "Sivrihisar", "Tepebaşı"
        ],
        "Gaziantep": ["Araban", "İslahiye", "Karkamış", "Nizip", "Nurdağı", "Oğuzeli", "Şahinbey", "Şehitkamil",
            "Yavuzeli"
        ],
        "Giresun": ["Alucra", "Bulancak", "Çamoluk", "Çanakçı", "Dereli", "Doğankent", "Espiye", "Eynesil",
            "Görele", "Güce", "Keşap", "Piraziz", "Şebinkarahisar", "Tirebolu", "Yağlıdere", "Merkez"
        ],
        "Gümüşhane": ["Kelkit", "Köse", "Kürtün", "Şiran", "Torul", "Merkez"],
        "Hakkari": ["Çukurca", "Derecik", "Şemdinli", "Yüksekova", "Merkez"],
        "Hatay": ["Altınözü", "Antakya", "Arsuz", "Belen", "Defne", "Dörtyol", "Erzin", "Hassa", "İskenderun",
            "Kırıkhan", "Kumlu", "Payas", "Reyhanlı", "Samandağ", "Yayladağı"
        ],
        "Iğdır": ["Aralık", "Karakoyunlu", "Tuzluca", "Merkez"],
        "Isparta": ["Aksu", "Atabey", "Eğirdir", "Gelendost", "Gönen", "Keçiborlu", "Senirkent", "Sütçüler",
            "Şarkikaraağaç", "Uluborlu", "Yalvaç", "Yenişarbademli", "Merkez"
        ],
        "İstanbul": ["Adalar", "Arnavutköy", "Ataşehir", "Avcılar", "Bağcılar", "Bahçelievler", "Bakırköy",
            "Başakşehir", "Bayrampaşa", "Beşiktaş", "Beykoz", "Beylikdüzü", "Beyoğlu", "Büyükçekmece",
            "Çatalca", "Çekmeköy", "Esenler", "Esenyurt", "Eyüpsultan", "Fatih", "Gaziosmanpaşa", "Güngören",
            "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sancaktepe", "Sarıyer",
            "Silivri", "Sultanbeyli", "Sultangazi", "Şile", "Şişli", "Tuzla", "Ümraniye", "Üsküdar",
            "Zeytinburnu"
        ],
        "İzmir": ["Aliağa", "Balçova", "Bayındır", "Bayraklı", "Bergama", "Beydağ", "Bornova", "Buca", "Çeşme",
            "Çiğli", "Dikili", "Foça", "Gaziemir", "Güzelbahçe", "Karabağlar", "Karaburun", "Karşıyaka",
            "Kemalpaşa", "Kınık", "Kiraz", "Konak", "Menderes", "Menemen", "Narlıdere", "Ödemiş", "Seferihisar",
            "Selçuk", "Tire", "Torbalı", "Urla"
        ],
        "Kahramanmaraş": ["Afşin", "Andırın", "Çağlayancerit", "Dulkadiroğlu", "Ekinözü", "Elbistan", "Göksun",
            "Nurhak", "Onikişubat", "Pazarcık", "Türkoğlu"
        ],
        "Karabük": ["Eflani", "Eskipazar", "Ovacık", "Safranbolu", "Yenice", "Merkez"],
        "Karaman": ["Ayrancı", "Başyayla", "Ermenek", "Kazımkarabekir", "Sarıveliler", "Merkez"],
        "Kars": ["Akyaka", "Arpaçay", "Digor", "Kağızman", "Sarıkamış", "Selim", "Susuz", "Merkez"],
        "Kastamonu": ["Abana", "Ağlı", "Araç", "Azdavay", "Bozkurt", "Cide", "Çatalzeytin", "Daday", "Devrekani",
            "Doğanyurt", "Hanönü", "İhsangazi", "İnebolu", "Küre", "Pınarbaşı", "Şenpazar", "Seydiler",
            "Taşköprü", "Tosya", "Merkez"
        ],
        "Kayseri": ["Akkışla", "Bünyan", "Develi", "Felahiye", "Hacılar", "İncesu", "Kocasinan", "Melikgazi",
            "Özvatan", "Pınarbaşı", "Sarıoğlan", "Sarız", "Talas", "Tomarza", "Yahyalı", "Yeşilhisar"
        ],
        "Kırıkkale": ["Bahşılı", "Balışeyh", "Çelebi", "Delice", "Karakeçili", "Keskin", "Sulakyurt", "Yahşihan",
            "Merkez"
        ],
        "Kırklareli": ["Babaeski", "Demirköy", "Kofçaz", "Lüleburgaz", "Pehlivanköy", "Pınarhisar", "Vize",
            "Merkez"],
        "Kırşehir": ["Akçakent", "Akpınar", "Boztepe", "Çiçekdağı", "Kaman", "Mucur", "Merkez"],
        "Kilis": ["Elbeyli", "Musabeyli", "Polateli", "Merkez"],
        "Kocaeli": ["Başiskele", "Çayırova", "Darıca", "Derince", "Dilovası", "Gebze", "Gölcük", "İzmit", "Kandıra",
            "Karamürsel", "Kartepe", "Körfez"
        ],
        "Konya": ["Ahırlı", "Akören", "Akşehir", "Altınekin", "Beyşehir", "Bozkır", "Çeltik", "Cihanbeyli", "Çumra",
            "Derbent", "Derebucak", "Doğanhisar", "Emirgazi", "Ereğli", "Güneysınır", "Hadim", "Halkapınar",
            "Hüyük", "Ilgın", "Kadınhanı", "Karapınar", "Karatay", "Kulu", "Meram", "Sarayönü", "Selçuklu",
            "Seydişehir", "Taşkent", "Tuzlukçu", "Yalıhüyük", "Yunak"
        ],
        "Kütahya": ["Altıntaş", "Aslanapa", "Çavdarhisar", "Domaniç", "Dumlupınar", "Emet", "Gediz", "Hisarcık",
            "Pazarlar", "Şaphane", "Simav", "Tavşanlı", "Merkez"
        ],
        "Malatya": ["Akçadağ", "Arapgir", "Arguvan", "Battalgazi", "Darende", "Doğanşehir", "Doğanyol", "Hekimhan",
            "Kale", "Kuluncak", "Pütürge", "Yazıhan", "Yeşilyurt"
        ],
        "Manisa": ["Ahmetli", "Akhisar", "Alaşehir", "Demirci", "Gölmarmara", "Gördes", "Kırkağaç", "Köprübaşı",
            "Kula", "Salihli", "Sarıgöl", "Saruhanlı", "Selendi", "Soma", "Şehzadeler", "Turgutlu", "Yunusemre"
        ],
        "Mardin": ["Artuklu", "Dargeçit", "Derik", "Kızıltepe", "Mazıdağı", "Midyat", "Nusaybin", "Ömerli", "Savur",
            "Yeşilli"
        ],
        "Mersin": ["Akdeniz", "Anamur", "Aydıncık", "Bozyazı", "Çamlıyayla", "Erdemli", "Gülnar", "Mezitli", "Mut",
            "Silifke", "Tarsus", "Toroslar", "Yenişehir"
        ],
        "Muğla": ["Bodrum", "Dalaman", "Datça", "Fethiye", "Kavaklıdere", "Köyceğiz", "Marmaris", "Menteşe",
            "Milas", "Ortaca", "Seydikemer", "Ula", "Yatağan"
        ],
        "Muş": ["Bulanık", "Hasköy", "Korkut", "Malazgirt", "Varto", "Merkez"],
        "Nevşehir": ["Acıgöl", "Avanos", "Derinkuyu", "Gülşehir", "Hacıbektaş", "Kozaklı", "Ürgüp", "Merkez"],
        "Niğde": ["Altunhisar", "Bor", "Çamardı", "Çiftlik", "Ulukışla", "Merkez"],
        "Ordu": ["Akkuş", "Altınordu", "Aybastı", "Çamaş", "Çatalpınar", "Çaybaşı", "Fatsa", "Gölköy", "Gülyalı",
            "Gürgentepe", "İkizce", "Kabadüz", "Kabataş", "Korgan", "Kumru", "Mesudiye", "Perşembe", "Ulubey",
            "Ünye"
        ],
        "Osmaniye": ["Bahçe", "Düziçi", "Hasanbeyli", "Kadirli", "Sumbas", "Toprakkale", "Merkez"],
        "Rize": ["Ardeşen", "Çamlıhemşin", "Çayeli", "Derepazarı", "Fındıklı", "Güneysu", "Hemşin", "İkizdere",
            "İyidere", "Kalkandere", "Pazar", "Merkez"
        ],
        "Sakarya": ["Adapazarı", "Akyazı", "Arifiye", "Erenler", "Ferizli", "Geyve", "Hendek", "Karapürçek",
            "Karasu", "Kaynarca", "Kocaali", "Pamukova", "Sapanca", "Serdivan", "Söğütlü", "Taraklı"
        ],
        "Samsun": ["Alaçam", "Asarcık", "Atakum", "Ayvacık", "Bafra", "Canik", "Çarşamba", "Havza", "İlkadım",
            "Kavak", "Ladik", "Salıpazarı", "Tekkeköy", "Terme", "Vezirköprü", "Yakakent"
        ],
        "Siirt": ["Baykan", "Eruh", "Kurtalan", "Pervari", "Şirvan", "Tillo", "Merkez"],
        "Sinop": ["Ayancık", "Boyabat", "Dikmen", "Durağan", "Erfelek", "Gerze", "Saraydüzü", "Türkeli", "Merkez"],
        "Sivas": ["Akıncılar", "Altınyayla", "Divriği", "Doğanşar", "Gemerek", "Gölova", "Gürün", "Hafik",
            "İmranlı", "Kangal", "Koyulhisar", "Merkez", "Suşehri", "Şarkışla", "Ulaş", "Yıldızeli", "Zara"
        ],
        "Şanlıurfa": ["Akçakale", "Birecik", "Bozova", "Ceylanpınar", "Eyyübiye", "Halfeti", "Haliliye", "Harran",
            "Hilvan", "Karaköprü", "Siverek", "Suruç", "Viranşehir"
        ],
        "Şırnak": ["Beytüşşebap", "Cizre", "Güçlükonak", "İdil", "Silopi", "Uludere", "Merkez"],
        "Tekirdağ": ["Çerkezköy", "Çorlu", "Ergene", "Hayrabolu", "Kapaklı", "Malkara", "Marmaraereğlisi",
            "Muratlı", "Saray", "Süleymanpaşa", "Şarköy"
        ],
        "Tokat": ["Almus", "Artova", "Başçiftlik", "Erbaa", "Niksar", "Pazar", "Reşadiye", "Sulusaray", "Turhal",
            "Yeşilyurt", "Zile", "Merkez"
        ],
        "Trabzon": ["Akçaabat", "Araklı", "Arsin", "Beşikdüzü", "Çarşıbaşı", "Çaykara", "Dernekpazarı", "Düzköy",
            "Hayrat", "Köprübaşı", "Maçka", "Of", "Ortahisar", "Sürmene", "Şalpazarı", "Tonya", "Vakfıkebir",
            "Yomra"
        ],
        "Tunceli": ["Çemişgezek", "Hozat", "Mazgirt", "Nazımiye", "Ovacık", "Pertek", "Pülümür", "Merkez"],
        "Uşak": ["Banaz", "Eşme", "Karahallı", "Sivaslı", "Ulubey", "Merkez"],
        "Van": ["Bahçesaray", "Başkale", "Çaldıran", "Çatak", "Edremit", "Erciş", "Gevaş", "Gürpınar", "İpekyolu",
            "Muradiye", "Özalp", "Saray", "Tuşba"
        ],
        "Yalova": ["Altınova", "Armutlu", "Çınarcık", "Çiftlikköy", "Termal", "Merkez"],
        "Yozgat": ["Akdağmadeni", "Aydıncık", "Boğazlıyan", "Çandır", "Çayıralan", "Çekerek", "Kadışehri",
            "Saraykent", "Sarıkaya", "Sorgun", "Şefaatli", "Yenifakılı", "Yerköy", "Merkez"
        ],
        "Zonguldak": ["Alaplı", "Çaycuma", "Devrek", "Gökçebey", "Kilimli", "Kozlu", "Merkez"]

    };


    window.onload = function() {

        // İller dropdown'ı doldur
        const illerSelect = document.getElementById('iller');
        for (const il in illerVeIlceler) {
            let option = document.createElement('option');
            option.value = il;
            option.textContent = il;
            illerSelect.appendChild(option);
        }
    };

    // İl seçildiğinde ilçeleri güncelleyen fonksiyon
    function updateDistricts() {
        const ilcelerSelect = document.getElementById('ilceler');
        const selectedIl = document.getElementById('iller').value;

        // Önce mevcut ilçeleri temizleyin
        ilcelerSelect.innerHTML = '<option value="">İlçe seçiniz</option>';

        if (selectedIl) {
            const ilceler = illerVeIlceler[selectedIl];
            ilceler.forEach(ilce => {
                let option = document.createElement('option');
                option.value = ilce;
                option.textContent = ilce;
                ilcelerSelect.appendChild(option);
            });
        }
    }
    </script>
    <?php
// Veritabanına bağlan
$baglan = mysqli_connect("localhost", "root", "", "motorsatis");

// "onayla" butonuna tıklanıp tıklanmadığını kontrol et
if(isset($_POST["onayla"])) {
    // En büyük Sipariş Numarasını bul
    $sorgu = "SELECT MAX(SiparisNo) AS max_siparis FROM iletisim";
    $sonuc = mysqli_query($baglan, $sorgu);
    $row = mysqli_fetch_assoc($sonuc);
    $max_siparis = $row['max_siparis'];

    // Yeni Sipariş Numarasını oluştur
    if ($max_siparis) {
        // Veritabanında mevcut bir Sipariş Numarası varsa, bir sonraki numarayı oluştur
        $new_siparis = $max_siparis + 1;
    } else {
        // Veritabanında hiç Sipariş Numarası yoksa, 1'den başla
        $new_siparis = 1;
    }

    // İletişim bilgilerini al
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $telefon = $_POST["telefon"];
    $email = $_POST["email"];
    $il = $_POST["il"];
    $ilce = $_POST["ilce"];
    $adres = $_POST["adres"];

    // INSERT sorgusunu hazırla ve çalıştır
    $sorgu = "INSERT INTO iletisim (ad, soyad, telefon, email, il, ilce, adres, SiparisNo) VALUES ('$ad', '$soyad', '$telefon', '$email', '$il', '$ilce', '$adres', '$new_siparis')";
    $sonuc = mysqli_query($baglan, $sorgu);

}

// Veritabanı bağlantısını kapat
mysqli_close($baglan);
?>
</body>

</html>