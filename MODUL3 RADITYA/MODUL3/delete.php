<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if(isset( $_GET["id"] ) ) {
    $id =( $_GET["id"] );
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $sql = "DELETE FROM showroom_mobil WHERE id=$id";
    $conn->query($sql);
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    $conn->query($sql);
}
echo '<script type="text/javascript">'; 
echo 'alert("Data berhasil dihapus!");';
echo 'window.location.href = "list_mobil.php";';
echo '</script>';
    

// Tutup koneksi ke database setelah selesai menggunakan database
$conn -> close();
?>