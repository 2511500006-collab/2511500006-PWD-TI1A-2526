<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: read_dosen.php");
    exit();
}

$id_dosen       = filter_input(INPUT_POST, 'id_dosen', FILTER_VALIDATE_INT);
$kode_dosen     = htmlspecialchars($_POST['kode_dosen'] ?? '');
$nama_dosen     = htmlspecialchars($_POST['nama_dosen'] ?? '');
$alamat_rumah   = htmlspecialchars($_POST['alamat_rumah'] ?? '');
$tgl_jadi_dosen = htmlspecialchars($_POST['tgl_jadi_dosen'] ?? '');
$jja_dosen      = htmlspecialchars($_POST['jja_dosen'] ?? '');
$homebase_prodi = htmlspecialchars($_POST['homebase_prodi'] ?? '');
$no_hp          = htmlspecialchars($_POST['no_hp'] ?? '');
$nama_pasangan  = htmlspecialchars($_POST['nama_pasangan'] ?? '');
$nama_anak      = htmlspecialchars($_POST['nama_anak'] ?? '');
$bidang_ilmu    = htmlspecialchars($_POST['bidang_ilmu'] ?? '');

if (!$id_dosen) {
    $_SESSION['flash_error'] = "ID Dosen tidak valid.";
    header("Location: read_dosen.php");
    exit();
}

if (empty($nama_dosen) || empty($homebase_prodi)) {
    $_SESSION['flash_error_edit'] = "Nama Dosen dan Homebase Prodi wajib diisi!";
    

    $_SESSION['old_edit_dosen'] = $_POST;
    
    header("Location: edit_dosen.php?id=" . $id_dosen);
    exit();
}

$sql = "UPDATE tbl_dosen SET 
            nama_dosen = ?, 
            alamat_rumah = ?, 
            tgl_jadi_dosen = ?, 
            jja_dosen = ?, 
            homebase_prodi = ?, 
            no_hp = ?, 
            nama_pasangan = ?, 
            nama_anak = ?, 
            bidang_ilmu = ? 
        WHERE id_dosen = ?";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {

    mysqli_stmt_bind_param($stmt, "sssssssssi", 
        $nama_dosen, 
        $alamat_rumah, 
        $tgl_jadi_dosen, 
        $jja_dosen, 
        $homebase_prodi, 
        $no_hp, 
        $nama_pasangan, 
        $nama_anak, 
        $bidang_ilmu, 
        $id_dosen
    );

    if (mysqli_stmt_execute($stmt)) {

        $_SESSION['flash_sukses'] = "Data dosen <strong>$nama_dosen</strong> berhasil diperbarui!";
        header("Location: read_dosen.php");
    } else {

        $_SESSION['flash_error'] = "Gagal memperbarui data: " . mysqli_error($conn);
        header("Location: edit_dosen.php?id=" . $id_dosen);
    }
    
    mysqli_stmt_close($stmt);

} else {

    $_SESSION['flash_error'] = "Terjadi kesalahan sistem (Query Error).";
    header("Location: read_dosen.php");
}

mysqli_close($conn);
?>