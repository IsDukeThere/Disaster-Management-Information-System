<?php
require_once '../../controllers/config.php';
?>

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
        border-radius: 10px;
        background-image: url('<?= url ?>img/pexels-zac-frith-325758-918794.jpg');
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

    .short-link {
        margin-left: 40px;
        padding-bottom: 20px;
        display: flex;
        flex-direction: row;
    }

    .link {
        padding: 5px 15px 5px 15px;
        border-radius: 25px;
        border: solid;
        border-color: white;
        margin: 15px;
        color: white;
    }

    .link :hover {
        padding: 6px 30px 6px 30px;
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
    }

    .def-longsor {
        margin: 30px 30px 60px 30px;
        padding-top: 10px;
        padding-bottom: 20px;
    }

    .jenis .Gejala .Faktor {
        margin: 20px 20px 20px 20px;
        padding: 20px 20px 20px 20px;
        color: #F2CCA0;
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
                    <a href="about.php">About Us</a>
                </div>
            </div>
        </nav>

        <div class="landing">
            <p>Tanah</p>
            <p>Longsor</p>
        </div>
        <div class="short-link" id="navspy">
            <div type="button" class="link">
                <a href="#scrollspyJenis">Jenis - Jenis</a>
            </div>
            <div type="button" class="link">
                <a href="#scrollspyGejala">Gejala</a>
            </div>
            <div type="button" class="link">
                <a href="#scrollspyFaktor">Faktor</a>
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
        </div>

        <div class="Gejala" id="scrollspyGejala">
            <h2>Gejala awal Tanah Longsor</h2>
        </div>

        <div class="Faktor" id="scrollspyFaktor">
            <h2>Faktor Penyebab Tanah Longsor</h2>
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