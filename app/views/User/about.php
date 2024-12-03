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
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #F2CCA0;
        color: #6A5946;
        cursor: pointer;
        padding: 10px 19px;
        border-radius: 120px;
    }

    #scroll-btn:hover {
        background-color: #6A5946;
        color: #F2CCA0;
    }

    /* .background {
        margin: 20px 25px 20px 25px;
        padding-bottom: 60px;
        border-radius: 10px;
        background-image: url('<?= img ?>img/pexels-zac-frith-325758-918794.jpg');
        background-size: cover;
        filter: brightness(1) grayscale(5) sepia(0.3);
    } */

    /* background-image {
        filter: brightness(10%);
        filter: grayscale(25%);
        filter: sepia(80%);
    } */

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
                    <a href="#" class="navbrand"><img src="<?= img ?>img/1.png" alt="SI Longsor" width="120px"></a>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="NavbarMenu">
                    <div class="nav-item position-relative" id="navspymenu">
                        <a href="#scrollspyPeta">Peta Bencana</a>
                        <a href="#scrollspyMitigasi">Mitigasi</a>
                        <a href="#scrollspyPenanganan">Penanggulangan</a>
                    </div>
                </div>
                <div class="about">
                    <a href="<?= page ?>User/about.php">About Us</a>
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

</body>

</html>