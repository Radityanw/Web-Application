<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Mobil</title>
    </head>
    <body>
        <?php 
            include("navbar.php");
            include("connect.php");
            
            // Buatlah query untuk mengambil masing-masing data berdasarkan id dari database (gunakan fungsi GET dan mysqli_fetch_assoc()
            $id = $_GET['id']; 
            $sql = "SELECT * FROM showroom_mobil WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $nama = $row['nama_mobil'];
            $brand = $row['brand_mobil'];
            $warna = $row['warna_mobil'];
            $tipe = $row['tipe_mobil'];
            $harga = $row['harga_mobil'];
            // serta query SELECT dan WHERE)



            //
        ?>
        <div class="row">
            <center>
                <h1>Detail Mobil</h1>
                <div class="col-md-4 p-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <!-- Tampilkan masing-masing data yang telah diambil dari database tadi -->
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="nama_mobil" id="nama_mobil" value="<?php echo $nama;?>" disabled>
                                    <label for="nama_mobil">Nama Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="brand_mobil" id="brand_mobil" value="<?php echo $brand;?>" placeholder="Tampilkan data brand_mobil disini"disabled>
                                    <label for="brand_mobil">Brand Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="warna_mobil" id="warna_mobil" value="<?php echo $warna;?>" disabled>
                                    <label for="warna_mobil">Warna Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" name="tipe_mobil" id="tipe_mobil" value="<?php echo $tipe;?>" disabled>
                                    <label for="tipe_mobil">Tipe Mobil</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="harga_mobil" id="harga_mobil" value="<?php echo $harga;?>"disabled>
                                    <label for="harga_mobil">Harga Mobil </label>
                                </div>
                                <a name="update" id="update" href="form_update_mobil.php?id=<?php echo $id ?>" class="btn btn-warning mb-3 mt-3 w-100">Edit</a>
                                <a name="delete" id="delete" href="delete.php?id=<?php echo $id ?>" class="btn btn-danger mb-3 mt-3 w-100">Delete</a>
                            </form>
                        </div>
                    </div>
                </div>
            <center>
        </div>
    </body>
</html>