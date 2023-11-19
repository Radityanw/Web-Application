<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h2>Berattt</h2>
    <form method="post" action="">
        berat: <input type="number" name="bb"><br>
        tinggi: <input type="number" name="tb"><br>
        <input type="submit" name="bmi" value="hitung">
    </form>

    <?php
    if (isset($_POST['bmi'])) {
        $angka1 = $_POST['bb'];
        $angka2 = $_POST['tb'];
        $hasil = $angka1 + $angka2;
        echo "Hasil : $hasil";
    }
    ?>
</body>
</html>