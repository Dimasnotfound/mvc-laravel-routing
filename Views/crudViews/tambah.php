<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Pegawai</title>
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/style-tambahdata.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Data Pegawai</h2>
        <form action="<?= urlpath('pegawai.tambah') ?>" method="POST" enctype="multipart/form-data">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="no_hp">No. HP:</label>
            <input type="tel" id="no_hp" name="no_hp" pattern="[0-9]{10,12}" required>

            <label for="bidang">Bidang:</label>
            <input type="text" id="bidang" name="bidang" required>

            <label for="status">Status Pegawai:</label>
            <select id="status" name="status" required>
                <option value="" selected disabled>Pilih status</option>
                <option value="tetap">Tetap</option>
                <option value="honorer">Honorer</option>
            </select>

            <label for="foto_profil">Foto Profil:</label>
            <input type="file" id="foto_profil" name="foto_profil" accept="image/*" required>

            <button type="submit">Submit</button>
        </form>

    </div>

    </div>
</body>

</html>