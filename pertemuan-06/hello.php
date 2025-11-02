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
$hobi = ["Main game", "Badminton", "Musik"];
$mahasiswa = (object)[
"nim" => "2511500006",
"nama" => "Grezelco Govin",
"prodi" => "Teknik Informatika"
];
$nilai_akhir = NULL;
echo "<h2>Demo Tipe Data PHP</h2>";
echo "<pre>";
echo "String:\n";
var_dump($nama);
echo "\nInteger:\n";
var_dump($umur);
echo "\nFloat:\n";
var_dump($tinggi);
echo "\nBoolean:\n";
var_dump($aktif);
echo "\nArray:\n";
var_dump($hobi);
echo "\nObject:\n";
var_dump($mahasiswa);
echo "\nNULL:\n";
var_dump($nilai_akhir);
echo "</pre>";
?>
<?php
define("DOSEN_PENGAMPU", "Yohanes Setiawan Japriadi, M.Kom.");
const MATAKULIAH = "Pemrograman Web Dasar";
echo "Dosen: " . DOSEN_PENGAMPU . "<br>";
echo "Matakuliah: " . MATAKULIAH;
?>
</body>
</html>

