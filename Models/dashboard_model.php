<?php 
include_once 'config/conn.php';


class dashboardModel{

static function getAll(){
    global $conn;
    $conn->begin_transaction();
    $stmt = $conn->prepare("SELECT id, nama, email, no_hp, bidang, status, foto_profil FROM db_pegawai");
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

static function insertData($nama, $email, $no_hp, $bidang, $status, $foto_path) {
    global $conn;

    // Persiapkan dan jalankan query dengan parameterized queries
    $stmt = $conn->prepare("INSERT INTO db_pegawai (nama, email, no_hp, bidang, status, foto_profil) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nama, $email, $no_hp, $bidang, $status, $foto_path);
    
    // Jalankan pernyataan
    $stmt->execute();
    $conn->commit();
    return true;
}

static function getAllByid($id){
    global $conn;
    $conn->begin_transaction();
    $stmt = $conn->prepare("SELECT * FROM db_pegawai WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}


static function updateData($new_nama, $new_email, $new_no_hp, $new_bidang, $new_status, $id) {
    global $conn;
    $stmt = $conn->prepare("UPDATE db_pegawai SET nama=?, email=?, no_hp=?, bidang=?, status=? WHERE id=?");
    $stmt->bind_param("sssssi", $new_nama, $new_email, $new_no_hp, $new_bidang, $new_status, $id);
    
    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $stmt->close();
        return false;
    }
}

static function deleteDataByid($id){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM db_pegawai WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        $stmt->close();
        return false;
    }
}
    
}