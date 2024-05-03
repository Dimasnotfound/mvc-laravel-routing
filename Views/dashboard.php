<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Pegawai</title>
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="sidebar">
        <h2>SI DATA PEGAWAI</h2>
        <a href="#login"><i class="fas fa-sign-in-alt"></i> Login</a>
        <a href="#data-pegawai"><i class="fas fa-users"></i> Data Pegawai</a>
        <a href="#absensi-pegawai"><i class="far fa-clock"></i> Absensi Pegawai</a>
        <a href="<?= urlpath('') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="content">
        <div class="data-pegawai-container">
            <h2><i class="fas fa-users"></i> Data Pegawai</h2>
        </div>
        <div class="crud-buttons">
            <a href="<?= urlpath('tambahData');?>"><i class="fas fa-plus-square"></i> Tambah Data</a>

        </div>
        <table>
            <thead>
                <tr>
                    <th class="blue-bg">ID</th>
                    <th class="blue-bg">Nama</th>
                    <th class="blue-bg">Email</th>
                    <th class="blue-bg">No HP</th>
                    <th class="blue-bg">Bidang</th>
                    <th class="blue-bg">Status</th>
                    <th class="blue-bg">Foto Profil</th>
                    <th class="blue-bg">Aksi</th>
                </tr>
            </thead>
            <tbody id="pegawaiTableBody">
                <?php
                if ($result->num_rows > 0) {
                    $count = 1; 
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$count."</td>"; 
                        echo "<td>".$row["nama"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["no_hp"]."</td>";
                        echo "<td>".$row["bidang"]."</td>";
                        echo "<td>".$row["status"]."</td>";
                        echo "<td><img src='" . BASEURL . "/" . $row["foto_profil"] . "' alt='Foto Profil' width='100'></td>";
                        echo "<td>";
                        echo "<a href='" . urlpath('editData') . "?id=" . $row["id"] . "' class='edit-btn'><i class='fas fa-edit'></i></a>";
                        echo "<a href='" . urlpath('deleteData') . "?id=" . $row["id"] . "' class='edit-btn' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><i class='fas fa-trash'></i></a>";
                        echo "</td>";
                        echo "</tr>";
                        $count++; 
                    }
                } else {
                    echo "<tr>
                            <td colspan='8'>Tidak ada data pegawai</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>