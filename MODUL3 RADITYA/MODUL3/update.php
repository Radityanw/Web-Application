<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');
include('form_update_mobil.php');

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id']; 

    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter


        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
            $sql = "SELECT * FROM showroom_mobil WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $nama = $row['nama_mobil'];
            $brand = $row['brand_mobil'];
            $warna = $row['warna_mobil'];
            $tipe = $row['tipe_mobil'];
            $harga = $row['harga_mobil']; 
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        if(isset($_POST["update"])) {
            $nama = $_POST["nama_mobil"];
            $brand = $_POST["brand_mobil"];
            $warna = $_POST["warna_mobil"];
            $tipe = $_POST["tipe_mobil"];
            $harga = $_POST["harga_mobil"];
            
        // Eksekusi perintah SQL
        $query = "UPDATE showroom_mobil SET nama_mobil = '$nama', brand_mobil = '$brand', warna_mobil = '$warna', tipe_mobil = '$tipe', harga_mobil = '$harga' WHERE id = $id";
        // Buatkan kondisi jika eksekusi query berhasil
        if (mysqli_query($conn, $query)) {
            echo '<script type="text/javascript">'; 
        echo 'alert("Data berhasil diedit!");';
        echo 'window.location.href = "list_mobil.php";';
        echo '</script>';
        }
        
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
    else {
        phpAlert(   "Data tidak berhasil diedit". mysqli_error($conn)   );
    }
}


    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database
$conn -> close();

?>