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
const MATAKULIAH = "Pemrograman Web";
echo "Dosen: " . DOSEN_PENGAMPU . "<br>";
echo "Matakuliah: " . MATAKULIAH;
?>
<?php
// Membuat konstanta kampus menggunakan define
// define("DOSEN_PENGAMPU", "Yohanes Setiawan Japriadi, M.Kom.");
# Membuat konstanta MATAKULIAH menggunakan const
/*const MATAKULIAH = "Pemrograman Web";
 Menampilkan nilai DOSEN_PENGAMPU ke layar
echo "Dosen: " . DOSEN_PENGAMPU . "<br>";
 Menampilkan nilai konstanta MATAKULIAH ke layar
echo "Matakuliah: " . MATAKULIAH;
*/
?>
<?php
$a = 10;
$b = 3;
echo $a + $b;
echo $a % $b;
?>
<?php
$a = 100;
$b = "100";
$c = 0;
$d = false;
echo "<h3>Perbandingan == dan ===</h3>";
echo "\$a == \$b : "; var_dump($a == $b);
echo "\$a === \$b : "; var_dump($a === $b);
echo "\$c == \$d : "; var_dump($c == $d);
echo "\$c === \$d : "; var_dump($c === $d);
?>
<?php
$nilai = 80;
if ($nilai >= 90) {
echo "A";
} elseif ($nilai >= 80) {
echo "B";
} else {
echo "C";
}
?>
<?php
$hari = "Senin";
switch ($hari) {
case "Senin": echo "Awal Minggu!"; break;
case "Jumat": echo "Hampir weekend!"; break;
default: echo "Hari biasa.";
}
?>
<?php
$hobi = ["Coding", "Memasak", "Musik", "Membaca", "Traveling"];
echo "<h3>Daftar Hobi Saya:</h3>";
for ($i = 0; $i < count($hobi); $i++) {
echo ($i + 1) . ". " . $hobi[$i] . "<br>";
}
echo "<hr>";
echo "<h4>Hasil print_r():</h4>";
echo "<pre>";
print_r($hobi);
echo "</pre>";
echo "<h4>Hasil var_dump():</h4>";
echo "<pre>";
var_dump($hobi);
echo "</pre>";
?>
</body>
</html>

