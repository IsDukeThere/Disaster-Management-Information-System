<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?= img ?>img/2.png" type="image/x-icon">
    <title>Informasi Bencana Longsor | Beranda</title>
</head>
<style>
    a {
        text-decoration: none;
    }

    body {
        background-color: #72604B;
    }

    #scroll-btn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 30px;
        border: none;
        outline: none;
        background-color: #F2CCA0;
        color: #6A5946;
        cursor: pointer;
        padding: 4px 20px;
        border-radius: 120px;
    }

    #scroll-btn:hover {
        background-color: #6A5946;
        color: #F2CCA0;
    }

    .background {
        margin: 20px 25px;
        padding-bottom: 60px;
        border-radius: 10px;
        position: relative;
        /* Penting untuk pseudo-elemen */
        overflow: hidden;
        /* Menghindari pseudo-elemen keluar dari batas elemen */
    }

    .background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 10px;
        background-image: url('<?= img ?>img/pexels-zac-frith-325758-918794.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(0.6) grayscale(5) sepia(0.6);
        /* Filter hanya diterapkan di pseudo-elemen */
        z-index: 0;
        /* Pastikan lapisan ini di bawah konten */
    }

    .background>* {
        position: relative;
        z-index: 1;
        /* Konten di atas pseudo-elemen */
    }

    .navbar {
        padding: 15px 15px 15px 20px;
    }

    .nav-item {
        padding: 10px 35px 10px 35px;
        border-radius: 25px;
        background-color: white;
    }

    .nav-item a {
        font-family: 'Montserrat';
        font-weight: 650;
        font-size: 16px;
        margin-right: 10px;
        margin-left: 10px;
        color: #483D30;
    }

    .about {
        padding: 5px 15px 5px 15px;
        border-radius: 15px;
        background-color: white;
    }

    .about a {
        margin-top: 50px;
        font-family: 'Montserrat';
        font-weight: 650;
        font-size: 16px;
        color: #483D30;
    }

    .landing {
        display: flex;
        flex-direction: column;
        margin-top: 50px;
    }

    .lower {
        padding-top: 40px;
        padding-bottom: 30px;
    }

    .short-link {
        margin-left: 40px;
        display: flex;
        flex-direction: row;
        font-size: larger;
        font-weight: 600;
    }

    .short-link a {
        padding: 5px 15px 5px 15px;
        border-radius: 25px;
        border: solid;
        border-color: white;
        margin: 15px;
        color: white;
    }

    .short-link :hover {
        padding: 5px 30px 5px 30px;
        border-radius: 25px;
        background-color: white;
        color: black;
    }

    .definisi {
        margin: 80px 25px 100px 25px;
    }

    .definisi p {
        margin: 30px 30px 30px 30px;
        color: #F2CCA0;
        text-align: justify;
        font-size: 18px;
    }

    .def-longsor {
        margin: 30px 30px 60px 30px;
        padding-top: 10px;
        padding-bottom: 20px;
    }

    .jenis {
        margin: 30px 25px 30px 25px;
        padding: 20px 20px 20px 40px;
        border-radius: 10px;
        background-color: #504435;
        background-size: cover;
        color: #F2CCA0;
        text-align: justify;
        display: grid;
        grid-template-columns: repeat(2, auto);
        grid-template-rows: repeat(3, auto);
    }

    .jenis h2 {
        font-weight: 800;
        padding-top: 20px;
        padding-bottom: 30px;
    }

    .jenis h4 {
        padding-left: 30px;
        font-size: 28px;
    }

    .jenis p {
        padding-left: 50px;
        padding-right: 60px;
        padding-bottom: 20px;
        font-size: 18px;
    }

    .image {
        width: 600px;
        display: block;
        margin: auto;
        padding-bottom: 20px;
    }

    .Gejala {
        margin: 30px 25px 30px 25px;
        padding: 20px 20px 20px 40px;
        color: #F2CCA0;
        text-align: justify;
        font-size: 18px;
        display: flex;
        flex-direction: column;
    }

    .Gejala h2 {
        font-weight: 800;
        padding-bottom: 15px;
    }

    .Gejala p {
        padding-left: 50px;
        padding-right: 60px;
        font-size: 18px;
    }

    .Faktor {
        margin: 30px 25px 30px 25px;
        padding: 20px 20px 20px 40px;
        border-radius: 10px;
        background-color: #504435;
        background-size: cover;
        color: #F2CCA0;
        text-align: justify;
    }

    .Faktor h2 {
        font-weight: 800;
        padding-bottom: 15px;
    }

    .Faktor p {
        padding-left: 50px;
        padding-right: 60px;
        font-size: 18px;
    }

    .Dampak {
        margin: 30px 25px 30px 25px;
        padding: 20px 20px 20px 40px;
        color: #F2CCA0;
        text-align: justify;
        font-size: 18px;
        display: flex;
        flex-direction: column;
    }

    .Dampak h2 {
        font-weight: 800;
        padding-bottom: 15px;
    }

    .jenis h4 {
        padding-left: 30px;
        font-size: 28px;
    }

    .Dampak p {
        padding-left: 50px;
        padding-right: 60px;
        font-size: 18px;
    }

    .data {
        margin: 30px 25px 30px 25px;
        padding-top: 10px;
        padding-bottom: 20px;
        border-radius: 10px;
        background-color: #504435;
        background-size: cover;
        color: #F2CCA0;
    }

    .mitigasi {
        margin: 20px 20px 20px 20px;
        padding: 20px 20px 20px 20px;
        text-align: justify;
        display: grid;
        grid-template-columns: repeat(2, auto);
        grid-template-rows: repeat(2, auto);
    }

    .mitigasi .content h4 {
        margin-right: 60px;
        margin-left: 35px;
    }

    .mitigasi h2 {
        font-weight: 800;
        padding-bottom: 15px;
    }

    .mitigasi p {
        padding-left: 50px;
        padding-right: 60px;
        font-size: 18px;
    }

    .lapor {
        font-family: 'Montserrat';
        font-weight: 800;
        font-size: 18px;
        margin: 30px 25px 30px 25px;
        padding-top: 10px;
        padding-bottom: 20px;
        border-radius: 10px;
        background-color: #504435;
        background-size: cover;
        color: #F2CCA0;
    }

    .form-title-nav h2 {
        font-weight: 800;
        padding-bottom: 15px;
    }

    .form-container {
        font-family: 'Montserrat';
        font-weight: 800;
        font-size: 18px;
        margin: 30px 25px 30px 25px;
        padding: 20px 30px 20px 30px;
        border-radius: 10px;
        background-color: #504435;
        background-size: cover;
        color: #F2CCA0;
    }

    label {
        font-family: 'Montserrat';
        font-weight: 600;
    }

    .btn-submit {
        background-color: #F2CCA0;
        color: #504435;
        border-radius: 20px;
        width: 15%;
        justify-content: center;
    }

    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .konten {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 35px 45px 15px 45px;
    }

    .konten a {
        color: #504435;
    }

    footer {
        width: 100%;
        bottom: 0;
        font-family: 'Montserrat';
        background-color: #F2CCA0;
        color: #504435;
        margin-top: 35px;
        padding-bottom: 15px;
        padding: 4px;
    }
</style>

<body>
    <button onclick="topFunction()" id="scroll-btn" title="Top">&uarr;</button>
    <script>
        // ketika pengunjung scroll kebawah 20px dari atas dokumen, maka tampilkan tombol scroll-btn
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scroll-btn").style.display = "block";
            } else {
                document.getElementById("scroll-btn").style.display = "none";
            }
        }

        // ketika tombol tersebut di klik, maka lakukan scroll keatas laman
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- ini cuma bagian navbar, tulisan gede Tanah Longsor sama  -->
    <div class="background">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="brand">
                    <a href="<?= page ?>user/" class="navbrand"><img src="<?= img ?>img/1.png" alt="SI Longsor" width="120px"></a>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="NavbarMenu">
                    <div class="nav-item position-relative" id="navspymenu">
                        <a href="#scrollspyPeta">Data Bencana</a>
                        <a href="#scrollspyMitigasi">Mitigasi</a>
                        <a href="#scrollspyPenanganan">Penanggulangan</a>
                    </div>
                </div>
                <div class="about">
                    <a href="<?= page ?>user/about">About Us</a>
                </div>
            </div>
        </nav>

        <div class="landing">
            <p style="font-family: 'Montserrat'; font-weight: 600; font-size: 60px; color: white; margin-left: 40px;">Sistem Informasi</p>
            <p style="font-family: 'Montserrat'; font-weight: 700; font-size: 140px; color: white; margin-left: 40px;">Tanah Longsor</p>
        </div>
        <div class="lower">
            <div class="short-link" id="navspy">
                <a href="#scrollspyJenis">Jenis - Jenis</a>
                <a href="#scrollspyGejala">Gejala</a>
                <a href="#scrollspyFaktor">Faktor</a>
            </div>
            <div class="short-link" id="navspy">
                <a href="#scrollspydampak">Dampak</a>
                <a href="#scrollspylapor">Lapor Longsor</a>
            </div>
        </div>
    </div>

    <!-- definisi tanah longsor -->
    <div class="definisi">
        <p>Tanah longsor adalah peristiwa geologi di mana massa tanah,
            batu, atau material lainnya bergerak menuruni lereng akibat
            gravitasi, sering dipicu oleh hujan lebat, erosi, gempa bumi,
            atau aktivitas manusia seperti penebangan hutan dan pembangunan
            yang tidak terencana. Peristiwa ini dapat menyebabkan kerusakan
            infrastruktur, kehilangan nyawa, serta gangguan ekosistem, tetapi
            risikonya dapat diminimalkan melalui pengelolaan lingkungan yang
            bijak dan perencanaan yang tepat.</p>
        <p style="font-style: italic;">"Tanah longsor atau gerakan tanah adalah suatu konsekuensi fenomena
            dinamis alam untuk mencapai kondisi baru akibat gangguan
            keseimbangan lereng yang terjadi, baik secara alamiah maupun
            akibat ulah manusia. Tanah longsor akan terjadi pada suatu lereng
            jika ada keadaan ketidakseimbangan yang menyebabkan terjadinya suatu
            proses mekanis, mengakibatkan sebagian dari lereng tersebut bergerak
            mengikuti gaya gravitasi, dan selanjutnya setelah terjadi tanah
            longsor, lereng akan seimbang atau stabil kembali
            (Akhirianto dan Naryanto, 2016: 117)."</p>
    </div>

    <div class="Def-longsor" data-bs-spy="scroll" data-bs-target="#navspy">
        <div class="jenis" id="scrollspyJenis">
            <h2>Jenis - Jenis Tanah Longsor</h2>
            <h2></h2>
            <div class="image">
                <img src="<?= img ?>img/longsorantranslasi.png" alt="Longsor Translasi" class="image">
            </div>
            <div class="content">
                <h4>Longsoran Geser (Translasi)</h4>
                <p>Jenis longsor ini terjadi ketika
                    tanah atau batuan bergerak menuruni
                    lereng secara lurus. Bayangkan seperti
                    papan seluncur yang meluncur di atas
                    permukaan licin. Longsoran ini sering
                    terjadi pada lereng yang bidangnya cukup
                    rata dan lapisan tanahnya tidak terlalu dalam.</p>
            </div>

            <div class="image">
                <img src="<?= img ?>img/longsoranrotasi.png" alt="Longsor Rotasi" class="image">
            </div>
            <div class="content">
                <h4>Longsoran Melingkar (Rotasi)</h4>
                <p>Pada jenis ini, tanah bergerak
                    melengkung atau berputar saat jatuh.
                    Biasanya longsoran ini terjadi pada
                    lereng yang lebih dalam dengan massa
                    tanah yang besar. Gambarnya seperti
                    tanah yang 'menggulung' saat bergerak ke bawah.</p>
            </div>

            <div class="image">
                <img src="<?= img ?>img/rayapantanah.png" alt="Rayapan Tanah" class="image">
            </div>
            <div class="content">
                <h4>Rayapan Tanah (Creep)</h4>
                <p>Longsor jenis ini sangat lambat dan tidak
                    langsung terlihat. Tanahnya pelan-pelan
                    sekali bergerak turun dari lereng. Jenis
                    tanahnya berupa butiran kasar dan halus.
                    Meskipun lambat, jenis longsor ini tetap
                    berbahaya karena bisa merusak bangunan
                    atau infrastruktur di sekitarnya dalam jangka panjang.</p>
            </div>

            <div class="image">
                <img src="<?= img ?>img/runtuhanbatu.png" alt="Runtuhan Batu" class="image">
            </div>
            <div class="content">
                <h4>Runtuhan Batu (Rockfall)</h4>
                <p>Ini jenis longsor di mana batuan jatuh
                    bebas dari tebing atau lereng yang curam.
                    Biasanya, batu-batu besar yang jatuh, dan
                    bisa sangat berbahaya karena pergerakannya
                    cepat dan tanpa peringatan.</p>
            </div>

            <div class="image">
                <img src="<?= img ?>img/pergerakanblok.png" alt="Pergerakan Blok" class="image">
            </div>
            <div class="content">
                <h4>pergerakan blok (block slide)</h4>
                <p>Jenis tanah longsor di mana sebuah massa
                    besar dari batu atau tanah bergerak turun
                    sebagai satu kesatuan utuh. Jenis longsor
                    ini biasanya terjadi di lereng yang terbuat
                    dari material yang keras, seperti batu, yang
                    memungkinkan seluruh blok tetap utuh saat bergerak.</p>
            </div>

            <div class="image">
                <img src="<?= img ?>img/aliranbahanrombakan.png" alt="Aliran Rombakan" class="image">
            </div>
            <div class="content">
                <h4>Aliran Bahan Rombakan</h4>
                <p>Longsor ini terjadi karera massa tanah bergerak
                    didorong oleh air. Biasanya terjadi di sepanjang
                    lembah dan mampu mencapai ratusan meter. Kecepatan
                    longsoran ini dipengaruhi oleh kemiringan tanah
                    itu sendiri</p>
            </div>
        </div>

        <div class="Gejala" id="scrollspyGejala">
            <h2>Gejala awal Tanah Longsor</h2>
            <p>1. Munculnya retakan-retakan di lereng yang sejajar dengan arah tebing.</p>
            <p>2. Biasanya terjadi setelah hujan.</p>
            <p>3. Munculnya mata air baru secara tiba-tiba.</p>
            <p>4. Tebing rapuh dan kerikil mulai berjatuhan.</p>
        </div>

        <div class="Faktor" id="scrollspyFaktor">
            <h2>Faktor Penyebab Tanah Longsor</h2>
            <p>1. Curah Hujan Tinggi</p>
            <p>2. Gempa Bumi</p>
            <p>3. Penggundulan Hutan</p>
            <p>4. Perubahan Penggunaan Lahan</p>
            <p>5. Tekstur tanah tidak padat</p>
            <p>6. Erosi</p>
            <p>7. Batuan yang rapuh</p>
            <p>8. Beban berat pada tanah</p>
        </div>

        <div class="Dampak" id="scrollspydampak">
            <h2>Dampak</h2>
            <h4>Korban jiwa</h4>
            <p>Hal paling mengerikan dari tanah longsor
                yaitu jatuhnya korban jiwa baik korban
                luka atau kematian. Tanah yang longsor
                secara tiba-tiba dapat menimpa siapa saja
                yang ada di jalurnya. Terutama jika longsor
                terjadi di daerah pemukiman warga. Dilansir
                dari <i>World Health Organization</i>, antara 1998
                hingga 2017, tanah longsor memengaruhi sekitar
                4,8 juta orang dan menyebabkan lebih dari 18 ribu
                kematian. Tidak hanya berdampak secara fisik,
                korban selamat dari tanah longsor kerap kali
                mengalami trauma psikis.</p>

            <h4>Rusaknya infrastruktur dan terputusnya jalur transportasi </h4>
            <p>Tanah longsor dapat menyebabkan kerusakan infrastruktur
                yang ada disekitarnya. <i>Robert L. Schuster</i> dan <i>Lynn M. Highland</i>
                dalam <i>Socioeconomic and Environmental Impacts of Landside in
                    the Western Hemisphere</i> (2001) menyebutkan tanah
                longsorng menyebabkan kerusakan konstruksi bangunan,
                jalur transportasi, bendungan, waduk, kanal,
                dan juga sistem komunikasi. Longsor dalam
                skala besar merusak bangunan, gedung, jalan, menara
                telekomunikasi, dan berbagai infrastruktur lainnya.
                Hal tersebut kerap kali menutup jalan dan memutus sinyal
                komunikasi, menyebabkan daerah yang terkenal longsor sulit dicapai.</p>

            <h4>Kehilangan tempat tinggal</h4>
            <p>Tanah longsor merusak rumah, membuat masyarakat kehilangan
                tempat tinggal. Hal tersebut jelas menimbulkan kerugian
                yang sangat besat. Harta benda masyarakat ikut terbawa longsor,
                dan hanya sedikit yang bisa diselamatkan. Kehilangan tempat
                tinggal juga menyebabkan korban longsor tidak memiliki tempat
                perlindungan, makanan, pakaian, juga tempat sanitasi. Sehingga,
                harus segera diberi bantuan sebelum gangguan kesehatan lainnya muncul.</p>

            <h4>Kerugian dan terhambatnya perekonomian</h4>
            <p>Rusaknya rumah, infrastruktur, dan lahan menyebabkan kerugian
                yang besar dan menghambat perekonomian. Akibat tanah longsor,
                korban tidak bisa melakukan aktivitas ekonomi. Akses jalan yang
                tertutup juga menyebabkan terhambatnya perekonomian masyarakat
                sekitar daerah longsor.</p>

            <h4>Rusaknya lahan pertanian</h4>
            <p>Disadur dari Food and Agriculture Organization of the United Nations,
                tanah longsor berdampak buruk pada mata pencarian petani karena
                dapat menghalangi akses tanah selama bertahun-tahun dan
                menghancurkan benih, dan menghilangkan tanaman serta hewan ternak.
                Tanah longsor dapat merusak lahan pertanian dalam waktu singkat,
                mematikan vegetasi yang ditanam, membuat tanah tidak bisa ditanami
                sementara waktu, dan menghasilkan kerugian yang besar bagi para petani.</p>

            <h4>Pencemaran sumber air</h4>
            <p>Tanah longsor dapat mencemari sumber air di sekitarnya seperti
                mata air dan sungai. Longsor dapat membawa sedimen yang
                menurunkan kualitas air. Namun, yang lebih berbahaya jika
                longsor membawa logam ataupun cairan kimia di dalamnya.
                Sedimen tanah dan batuan akan mengendap di sungai dan
                membuatnya keruh. Namun, bahan kimia juga logam berat dapat
                merusak kualitas sungai, mencemari sepanjang aliran sungai,
                dan memberikan gangguan kesehatan hingga kematian pada makhluk
                hidup di sekitarnya.</p>

        </div>

    </div>

    <!-- Di bagian sini nanti ceritanya buat peta bencana, cara mitigasi dan penanganannya (Boleh juga kalo ada ide lain masukin aja) -->
    <!-- Semua jadi satu dokumen aja, navbarnya pake scroll spy (Bootstrap) -->
    <div class="data" data-bs-spy="scroll" data-bs-target="#navspymenu">
        <div class="mitigasi" id="scrollspyMitigasi">
            <h2>Mitigasi</h2>
            <h2></h2>
            <p>Mitigasi bencana adalah upaya atau tindakan yang dilakukan
                untuk mengurangi atau meminimalkan dampak negatif dari
                bencana alam atau bencana buatan manusia. Tujuannya adalah
                untuk mengurangi risiko, kerugian, dan kerusakan yang mungkin
                terjadi akibat bencana. Mitigasi bencana melibatkan
                langkah-langkah pencegahan, persiapan, dan perlindungan
                agar masyarakat, infrastruktur, dan lingkungan dapat lebih
                siap menghadapi bencana dan meminimalkan dampaknya.</p>
            <p></p>
            <div class="content">
                <h4>Mengurangi tingkat keterjangan lereng dengan pengolahan lahan terasering di kawasan lereng</h4>
                <p>Terasering adalah metode pengelolaan lahan berbentuk
                    tangga atau berundak yang digunakan untuk mengurangi
                    tingkat keterjangan lereng, terutama di kawasan berbukit
                    atau pegunungan. Teknik ini bertujuan untuk mengurangi laju
                    aliran air permukaan, sehingga mencegah erosi dan menjaga
                    kestabilan struktur tanah. Dengan menciptakan permukaan datar
                    pada setiap tingkat, terasering memungkinkan air meresap ke dalam
                    tanah secara optimal dan mengurangi risiko tanah menjadi jenuh yang
                    dapat memicu longsor. Selain itu, terasering juga memberikan ruang
                    yang aman untuk aktivitas pertanian, di mana tanaman yang ditanam
                    membantu memperkuat tanah melalui akar-akarnya. Dengan demikian,
                    terasering tidak hanya berfungsi untuk mitigasi bencana longsor,
                    tetapi juga mendukung keberlanjutan lingkungan dan pengelolaan sumber
                    daya lahan yang lebih baik.</p>
            </div>
            <div class="image">
                <img src="<?= img ?>img/mitigasi/terasering.jpg" alt="terasering" class="image">
            </div>
            <div class="content">
                <h4>Pembangunan talud(dinding penahan tanah)</h4>
                <p>Talud adalah struktur dinding yang dibangun untuk menahan tekanan lateral tanah, terutama pada area lereng atau tebing, dengan tujuan mencegah longsor dan menjaga kestabilan tanah. Talud biasanya dibuat dari material seperti batu, beton, atau bata yang disusun secara kokoh agar mampu menahan beban tanah di atasnya. Selain berfungsi sebagai penahan tanah, talud juga membantu mengalirkan air hujan dengan lebih teratur melalui sistem drainase yang sering kali terintegrasi di dalamnya, sehingga mengurangi risiko jenuhnya tanah yang dapat memicu longsor. Struktur ini sering diterapkan di kawasan rawan longsor, seperti lereng jalan, bantaran sungai, dan area permukiman berbukit. Dengan pembangunannya yang tepat, talud menjadi salah satu langkah mitigasi efektif untuk melindungi lingkungan sekaligus infrastruktur di sekitarnya.</p>
            </div>
            <div class="image">
                <img src="<?= img ?>img/mitigasi/talud.jpg" alt="Talud" class="image">
            </div>
            <div class="content">
                <h4>Menjaga drainase lereng</h4>
                <p>Menjaga drainase lereng merupakan langkah penting dalam mencegah longsor dan kerusakan lingkungan di kawasan berbukit atau curam. Sistem drainase yang baik berfungsi untuk mengalirkan air hujan secara teratur agar tidak menggenangi atau menjenuhkan tanah di lereng, yang dapat menyebabkan pergerakan tanah. Hal ini dilakukan dengan memastikan saluran air tetap bersih dari sumbatan seperti sampah, sedimen, atau tumbuhan liar. Selain itu, pembuatan saluran drainase yang mengikuti kontur lereng dapat membantu mengurangi kecepatan aliran air, sehingga mengurangi erosi. Pada beberapa kasus, penggunaan talang air, parit beton, atau sumur resapan di sekitar lereng juga ditambahkan untuk memaksimalkan pengelolaan air. Dengan menjaga drainase lereng tetap berfungsi optimal, stabilitas tanah dapat dipertahankan dan risiko bencana longsor dapat diminimalkan.</p>
            </div>
            <div class="image">
                <img src="<?= img ?>img/mitigasi/drainasea.jpg" alt="Drainase" class="image">
            </div>
            <div class="content">
                <h4>Melakukan reboisasi </h4>
                <p>Reboisasi adalah upaya penghijauan kembali kawasan hutan atau lahan kritis dengan menanam pohon untuk memulihkan fungsi ekologisnya. Pada lereng atau daerah rawan longsor, reboisasi menjadi langkah penting karena pohon yang ditanam membantu memperkuat struktur tanah melalui akar-akarnya yang menyerap air dan mengikat partikel tanah. Selain itu, reboisasi juga berperan dalam mengurangi risiko erosi dengan memperlambat laju air hujan saat mencapai permukaan tanah, berkat kanopi pohon yang menahan intensitas hujan. Upaya ini tidak hanya mencegah longsor, tetapi juga memperbaiki kualitas lingkungan, seperti meningkatkan resapan air tanah, mengurangi aliran permukaan, dan menjaga keberagaman hayati. Reboisasi yang dilakukan secara terencana dan berkelanjutan memberikan manfaat jangka panjang bagi stabilitas ekosistem dan kesejahteraan masyarakat sekitar.</p>
            </div>
            <div class="image">
                <img src="<?= img ?>img/mitigasi/reboisasi.jpg" alt="Reboisasi" class="image">
            </div>
        </div>
    </div>
    <div class="lapor" id="scrollspylapor">
        <div class="container mt-4 d-flex justify-content-center">
            <div class="form-title-nav">
                <h2>Form Laporan Kejadian Tanah Longsor</h2>
            </div>
        </div>

        <div class="form-container">
            <form action="submit_laporan.php" method="post">
                <div class="mb-3">
                    <label for="tempatKejadian" class="form-label">Tempat Kejadian</label>
                    <input type="text" class="form-control" id="tempatKejadian" name="tempatKejadian" placeholder="Masukkan tempat kejadian" required>
                </div>
                <div class="mb-3">
                    <label for="tanggalKejadian" class="form-label">Tanggal Kejadian</label>
                    <input type="date" class="form-control" id="tanggalKejadian" name="tanggalKejadian" required>
                </div>
                <div class="mb-3">
                    <label for="jumlahKorban" class="form-label">Jumlah Korban</label>
                    <input type="number" class="form-control" id="jumlahKorban" name="jumlahKorban" placeholder="Masukkan jumlah korban" min="0" required>
                </div>
                <button type="submit" class="btn btn-submit">Kirim Laporan</button>
            </form>
        </div>
    </div>
</body>
<footer>
    <div class="konten">
        <div class="footer-section">
            <img src="<?= img ?>img/3.png" alt="SI Longsor" width="120px">
            <p>Sistem Informasi Tanah Longsor</p>
        </div>
        <div class="footer-section">
            <h6>Follow Us</h6>
            <div class="social-icons" style="align-items: center;">
                <a href="#"><img src="<?= ico ?>ico/facebook.svg" alt="Facebook"></a>
                <a href="#"><img src="<?= ico ?>ico/twitter.svg" alt="Twitter"></a>
                <a href="#"><img src="<?= ico ?>ico/instagram.svg" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-section">
            <h6>Contact</h6>
            <p>Email: info@SiLongsor.com</p>
            <a href="https://wa.me/+6288225025876">Phone: +6288225025876</a>
        </div>
    </div>
    <center>SiLongsor&copy; 2024</center>
</footer>

</html>