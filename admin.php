<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Longsor</title>
    <style>
        a {
            text-decoration: none;
        }

        body {
            background-color: #72604B;
            font-family: 'Montserrat', Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
        }

        nav {
            background-color: #504435;
            padding: 15px 25px;
            border-radius: 25px;
            margin: 20px;
        }

        .nav-item {
            display: inline-block;
            margin: 0 15px;
        }

        .nav-item a {
            color: white;
            font-weight: 650;
            font-size: 16px;
        }

        .nav-item a:hover {
            text-decoration: underline;
        }

        .background {
            margin: 20px 25px 20px 25px;
            border-radius: 10px;
            background-image: url('img/pexels-zac-frith-325758-918794.jpg');
            background-size: cover;
        }

        h1 {
            color: white;
            text-align: center;
        }

        form {
            margin: 20px;
            padding: 15px;
            border-radius: 10px;
            background-color: #504435;
        }

        form input, form select, form textarea, form button {
            margin: 5px 0;
            padding: 10px;
            width: calc(100% - 22px);
            font-family: 'Montserrat';
            font-size: 14px;
            border-radius: 5px;
            border: none;
        }

        form button {
            background-color: #72604B;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        form button:hover {
            background-color: #8B7765;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #504435;
            color: white;
        }

        table, th, td {
            border: 1px solid #8B7765;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #72604B;
        }

        section {
            margin: 20px 25px;
            border-radius: 10px;
            padding: 20px;
            background-color: #504435;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-item"><a href="#data-korban">Data Korban Longsor</a></div>
        <div class="nav-item"><a href="#data-kejadian">Data Kejadian Longsor</a></div>
    </nav>

    <section id="data-korban">
        <h1>Data Korban Longsor</h1>
        <form method="post">
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="number" name="umur" placeholder="Umur" required>
            <select name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <input type="text" name="status" placeholder="Status" required>
            <button type="submit" name="action_korban" value="Tambah">Tambah</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $row = $data_korban->fetch_assoc() ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['umur'] ?></td>
                        <td><?= $row['jenis_kelamin'] ?></td>
                        <td><?= $row['status'] ?></td>
                        <td>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" name="action_korban" value="Hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        </table>
    </section>

    <section id="data-kejadian">
        <h1>Data Kejadian Longsor</h1>
        <form method="post">
            <input type="text" name="lokasi" placeholder="Lokasi" required>
            <input type="date" name="tanggal" required>
            <textarea name="deskripsi" placeholder="Deskripsi" required></textarea>
            <button type="submit" name="action_kejadian" value="Tambah">Tambah</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $row = $data_kejadian->fetch_assoc() ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['lokasi'] ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td><?= $row['deskripsi'] ?></td>
                        <td>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" name="action_kejadian" value="Hapus">Hapus</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        </table>
    </section>
</body>
</html>
