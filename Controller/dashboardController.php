<?php 

include_once 'Models/dashboard_model.php';


class dashboardController{

    static function index(){
        $data = dashboardModel::getAll();
        // var_dump($data);
        
        return view('dashboard',['result' => $data]);
    }

    // TAMBAH DATA

    static function tambahData(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $no_hp = $_POST["no_hp"];
            $bidang = $_POST["bidang"];
            $status = $_POST["status"];
            
            // Cek apakah file foto diunggah dengan benar
            if(isset($_FILES['foto_profil']) && $_FILES['foto_profil']['error'] === UPLOAD_ERR_OK) {
                $foto_name = $_FILES['foto_profil']['name'];
                $foto_temp = $_FILES['foto_profil']['tmp_name'];
                $foto_folder = "uploads/"; 
                $foto_path = $foto_folder . $foto_name;
    
                // Memindahkan file foto ke folder uploads
                if(move_uploaded_file($foto_temp, $foto_path)) {
                    // Panggil fungsi untuk menyisipkan data ke database
                    $success = dashboardModel::insertData($nama, $email, $no_hp, $bidang, $status, $foto_name);
                    if($success) {
                        $data = dashboardModel::getAll();
                        return view('dashboard',['result' => $data]);         
                    } else {
                        echo "Gagal menyimpan data. Silakan coba lagi.";
                    }
                } else {
                    echo "Gagal mengunggah file foto. Silakan coba lagi.";
                }
            } else {
                echo "Gagal mengunggah file foto. Silakan coba lagi.";
            }
        }
        return view('crudViews/tambah');
    }

    // EDIT DATA

    static function editData(){
        $id = intval($_GET['id']);
        // var_dump($id);

        $result = dashboardModel::getAllByid($id);
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $foto_profil = $row["foto_profil"];
                $nama = $row["nama"];
                $email = $row["email"];
                $no_hp = $row["no_hp"];
                $bidang = $row["bidang"];
                $status = $row["status"];
            } 
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $new_nama = $_POST['nama'];
            $new_email = $_POST['email'];
            $new_no_hp = $_POST['no_hp'];
            $new_bidang = $_POST["bidang"];
            $new_status = $_POST["status"];
            // var_dump($_POST);
            
            // var_dump($id);

            $success = dashboardModel::updateData($new_nama,$new_email,$new_no_hp,$new_bidang,$new_status,$id);
            if($success) {
                $data = dashboardModel::getAll();
                return view('dashboard',['result' => $data]);         
            } else {
                echo "Gagal menyimpan data. Silakan coba lagi.";
            }

            
        }
        

        return view('crudViews/edit',[
                        'id' => $id,
                        'foto_profil' => $foto_profil,
                        'nama' => $nama,
                        'email' => $email,
                        'no_hp' => $no_hp,
                        'bidang' => $bidang,
                        'status' => $status,
                    ]);
    }


    // Delete Data

    static function deteleData(){
        $id = intval($_GET['id']);
        // var_dump($id);
        $success = dashboardModel::deleteDataByid($id);
        if($success) {
            $data = dashboardModel::getAll();
            echo '<script>alert("Data berhasil dihapus.");</script>';
            return view('dashboard',['result' => $data]);         
        } else {
            echo '<script>alert("GAGAL.");</script>';
            $data = dashboardModel::getAll();
            return view('dashboard',['result' => $data]);         
        }
    }
}