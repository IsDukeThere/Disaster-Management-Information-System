<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Informasi Bencana Longsor | Beranda</title>
</head>
<style>
    a {
        text-decoration: none;
    }

    body {
        background-color: #72604B;
    }

    .background {
        margin: 20px 25px 20px 25px;
        padding-bottom: 60px;
        border-radius: 10px;
        background-image: url('<?= img ?>img/pexels-zac-frith-325758-918794.jpg');
        background-size: cover;
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
        font-family: 'Montserrat';
        font-weight: 650;
        font-size: 16px;
        color: #483D30;
    }

    .landing {
        display: flex;
        flex-direction: column;

    }

    .landing p {
        font-family: 'Montserrat';
        font-weight: 700;
        font-size: 150px;
        color: white;
        margin-left: 40px;

    }

    .lower {
        margin-top: 40px;
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
    }

    .jenis h2 {
        font-weight: 800;
        padding-bottom: 15px;
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
    }

    .mitigasi h2 {
        font-weight: 800;
        padding-bottom: 15px;
    }
</style>

<body>
    <!-- ini cuma bagian navbar, tulisan gede Tanah Longsor sama  -->
    <div class="background">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="brand">
                    <a class="navbrand">Anggep Aja Logo</a>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="NavbarMenu">
                    <div class="nav-item position-relative" id="navspymenu">
                        <a href="#scrollspyPeta">Peta Bencana</a>
                        <a href="#scrollspyMitigasi">Mitigasi</a>
                        <a href="#scrollspyPenanganan">Penanganan</a>
                    </div>
                </div>
                <div class="about">
                    <a href="<?= page ?>User/about.php">About Us</a>
                </div>
            </div>
        </nav>

        <div class="landing">
            <p>Tanah</p>
            <p>Longsor</p>
        </div>
        <div class="lower">
            <div class="short-link" id="navspy">
                <a href="#scrollspyJenis">Jenis - Jenis</a>
                <a href="#scrollspyGejala">Gejala</a>
                <a href="#scrollspyFaktor">Faktor</a>
            </div>
            <div class="short-link" id="navspy">
                <a href="#scrollspydampak">Dampak</a>
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
            <h4>Longsoran Geser (Translasi)</h4>
            <div class="image">
                <img src="<?= img ?>img/longsorantranslasi.png" alt="Longsor Translasi" class="image">
            </div>
            <p>Jenis longsor ini terjadi ketika
                tanah atau batuan bergerak menuruni
                lereng secara lurus. Bayangkan seperti
                papan seluncur yang meluncur di atas
                permukaan licin. Longsoran ini sering
                terjadi pada lereng yang bidangnya cukup
                rata dan lapisan tanahnya tidak terlalu dalam.</p>

            <h4>Longsoran Melingkar (Rotasi)</h4>
            <div class="image">
                <img src="<?= img ?>img/longsoranrotasi.png" alt="Longsor Rotasi" class="image">
            </div>
            <p>Pada jenis ini, tanah bergerak
                melengkung atau berputar saat jatuh.
                Biasanya longsoran ini terjadi pada
                lereng yang lebih dalam dengan massa
                tanah yang besar. Gambarnya seperti
                tanah yang 'menggulung' saat bergerak ke bawah.</p>

            <h4>Rayapan Tanah (Creep)</h4>
            <div class="image">
                <img src="<?= img ?>img/rayapantanah.png" alt="Rayapan Tanah" class="image">
            </div>
            <p>Longsor jenis ini sangat lambat dan tidak
                langsung terlihat. Tanahnya pelan-pelan
                sekali bergerak turun dari lereng. Jenis
                tanahnya berupa butiran kasar dan halus.
                Meskipun lambat, jenis longsor ini tetap
                berbahaya karena bisa merusak bangunan
                atau infrastruktur di sekitarnya dalam jangka panjang.</p>

            <h4>Runtuhan Batu (Rockfall)</h4>
            <div class="image">
                <img src="<?= img ?>img/runtuhanbatu.png" alt="Runtuhan Batu" class="image">
            </div>
            <p>Ini jenis longsor di mana batuan jatuh
                bebas dari tebing atau lereng yang curam.
                Biasanya, batu-batu besar yang jatuh, dan
                bisa sangat berbahaya karena pergerakannya
                cepat dan tanpa peringatan.</p>

            <h4>pergerakan blok (block slide)</h4>
            <div class="image">
                <img src="<?= img ?>img/pergerakanblok.png" alt="Pergerakan Blok" class="image">
            </div>
            <p>Jenis tanah longsor di mana sebuah massa
                besar dari batu atau tanah bergerak turun
                sebagai satu kesatuan utuh. Jenis longsor
                ini biasanya terjadi di lereng yang terbuat
                dari material yang keras, seperti batu, yang
                memungkinkan seluruh blok tetap utuh saat bergerak.</p>

            <h4>Aliran Bahan Rombakan</h4>
            <div class="image">
                <img src="<?= img ?>img/aliranbahanrombakan.png" alt="Aliran Rombakan" class="image">
            </div>
            <p>Longsor ini terjadi karera massa tanah bergerak
                didorong oleh air. Biasanya terjadi di sepanjang
                lembah dan mampu mencapai ratusan meter. Kecepatan
                longsoran ini dipengaruhi oleh kemiringan tanah
                itu sendiri</p>
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
            <p>Lorem ipsum dolor, sit amet consectetur
                adipisicing elit. Ratione iusto aliquid laudantium.
                Quis dolore quaerat tenetur dolores earum tempora
                incidunt, sed optio sunt sint, aspernatur fugit.
                Nobis quis quod sint.</p>
            <p>Lorem ipsum dolor, sit amet consectetur
                adipisicing elit. Ratione iusto aliquid laudantium.
                Quis dolore quaerat tenetur dolores earum tempora
                incidunt, sed optio sunt sint, aspernatur fugit.
                Nobis quis quod sint.</p>
            <p>Lorem ipsum dolor, sit amet consectetur
                adipisicing elit. Ratione iusto aliquid laudantium.
                Quis dolore quaerat tenetur dolores earum tempora
                incidunt, sed optio sunt sint, aspernatur fugit.
                Nobis quis quod sint.</p>
            <p>Lorem ipsum dolor, sit amet consectetur
                adipisicing elit. Ratione iusto aliquid laudantium.
                Quis dolore quaerat tenetur dolores earum tempora
                incidunt, sed optio sunt sint, aspernatur fugit.
                Nobis quis quod sint.</p>
        </div>
    </div>
</body>

</html>