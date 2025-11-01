<!DOCTYPE html>
<html>
<head>
<title>Belajar PHP Dasar</title>
</head>
<body>
    <h1><?php echo "Halo, Dunia PHP!"; ?></h1>
    <h2><?php echo "Selamat datang di PHP, Grezelco Govin"; ?></h2>
    <?php
$nama = "Grezelco Govin";
$umur = 18;
$tinggi = 1.75;
$aktif = true;
echo "Nama: $nama <br>";
echo "Umur: $umur tahun <br>";
echo "Tinggi: $tinggi meter <br>";
echo "Status aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>";
var_dump($nama);
var_dump($umur);
var_dump($tinggi);
var_dump($aktif);
?>
</body>
</html>

