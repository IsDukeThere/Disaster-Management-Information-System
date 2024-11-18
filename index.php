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
        background-image: url(img/pexels-zac-frith-325758-918794.jpg);
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
        color: black;
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
        color: black;
    }

    .landing p {
        font-family: 'Montserrat';
        font-weight: 700;
        font-size: 150px;
        color: white;
        margin-left: 40px;
        width: 50%;

    }

    .definisi {
        margin: 20px 25px 20px 25px;
    }

    .definisi p {
        margin: 30px 30px 30px 30px;
    }

    .data {
        margin: 20px 25px 20px 25px;
        border-radius: 10px;
        background-color: #504435;
        background-size: cover;
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
                    <div class="nav-item position-relative" id="navspy">
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
            <p>Tanah Longsor</p>
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
    </div>

    <!-- Di bagian sini nanti ceritanya buat peta bencana, cara mitigasi dan penanganannya (Boleh juga kalo ada ide lain masukin aja) -->
    <!-- Semua jadi satu dokumen aja, navbarnya pake scroll spy (Boottrap) -->
    <div class="data" data-bs-spy="scroll" data-bs-target="#navspy">
        <div class="mitigasi" id="scrollspyMitigasi">
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