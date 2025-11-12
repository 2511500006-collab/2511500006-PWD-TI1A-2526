<?php
session_start();
$sesNIM = $_POST["txtNIM"];
$sesLahir = $_POST["txtLahir"];
$sesTanggal = $_POST["txtTanggal"];
$sesHobi = $_POST["txtHobi"];
$sesPasangan = $_POST["txtPasangan"];
$sespekerjaan = $_POST["txtpekerjaan"];
$sesTua = $_POST["txtTua"];
$sesKakak = $_POST["txtKakak"];
$sesAdik = $_POST["txtAdik"];

$_SESSION["sesNIM"] = $sesNIM;
$_SESSION["sesLahir"] = $sesLahir;
$_SESSION["sesTanggal"] = $sesTanggal;
$_SESSION["sesHobi"] = $sesHobi;
$_SESSION["sesPasangan"] = $sesPasangan;
$_SESSION["sespekerjaan"] = $sespekerjaan;
$_SESSION["sesTua"] = $sesTua;
$_SESSION["sesKakak"] = $sesKakak;
$_SESSION["sesAdik"] = $sesAdik;

header("location: index.php");
?>