<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/style-tambahdata.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="container">
        <h2>Edit Data Pegawai</h2>
        <form action="<?= urlpath('editData') ?>?id=<?= $id ?>" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

            <label for="no_hp">No. HP:</label>
            <input type="tel" id="no_hp" name="no_hp" pattern="[0-9]{10,12}" value="<?php echo $no_hp; ?>" required>

            <label for="bidang">Bidang:</label>
            <input type="text" id="bidang" name="bidang" value="<?php echo $bidang; ?>" required>

            <label for="status">Status Pegawai:</label>
            <select id="status" name="status" required>
                <option value="tetap" <?php if ($status === 'tetap') echo 'selected'; ?>>Tetap</option>
                <option value="honorer" <?php if ($status === 'honorer') echo 'selected'; ?>>Honorer</option>
            </select>

            <label for="foto_profil">Foto Profil:</label>
            <input type="file" id="foto_profil" name="foto_profil" accept="image/*" required>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>