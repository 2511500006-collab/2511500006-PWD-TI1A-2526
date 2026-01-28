<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

# Validasi ID dari parameter URL (?id=...)
$id_dosen = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

if (!$id_dosen) {
    $_SESSION['flash_error'] = 'Akses tidak valid. ID Dosen tidak ditemukan.';
    header("Location: read_dosen.php");
    exit();
}

# Ambil data lama dari database berdasarkan ID
$stmt = mysqli_prepare($conn, "SELECT * FROM tbl_dosen WHERE id_dosen = ? LIMIT 1");
if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    header("Location: read_dosen.php");
    exit();
}

mysqli_stmt_bind_param($stmt, "i", $id_dosen);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);
mysqli_stmt_close($stmt);

if (!$row) {
    $_SESSION['flash_error'] = 'Data dosen tidak ditemukan.';
    header("Location: read_dosen.php");
    exit();
}

# Nilai awal (prefill form) dari Database
$kode_dosen     = $row['kode_dosen'] ?? '';
$nama_dosen     = $row['nama_dosen'] ?? '';
$alamat_rumah   = $row['alamat_rumah'] ?? '';
$tgl_jadi_dosen = !empty($row['tgl_jadi_dosen']) ? date('Y-m-d', strtotime($row['tgl_jadi_dosen'])) : '';
$jja_dosen      = $row['jja_dosen'] ?? '';
$homebase_prodi = $row['homebase_prodi'] ?? '';
$no_hp          = $row['no_hp'] ?? '';
$nama_pasangan  = $row['nama_pasangan'] ?? '';
$nama_anak      = $row['nama_anak'] ?? '';
$bidang_ilmu    = $row['bidang_ilmu'] ?? '';

# Ambil error dan nilai old input jika ada (jika update gagal sebelumnya)
$flash_error = $_SESSION['flash_error_edit'] ?? '';
$old = $_SESSION['old_edit_dosen'] ?? [];
unset($_SESSION['flash_error_edit'], $_SESSION['old_edit_dosen']);

if (!empty($old)) {
    $nama_dosen     = $old['nama_dosen'] ?? $nama_dosen;
    $alamat_rumah   = $old['alamat_rumah'] ?? $alamat_rumah;
    $tgl_jadi_dosen = $old['tgl_jadi_dosen'] ?? $tgl_jadi_dosen;
    $jja_dosen      = $old['jja_dosen'] ?? $jja_dosen;
    $homebase_prodi = $old['homebase_prodi'] ?? $homebase_prodi;
    $no_hp          = $old['no_hp'] ?? $no_hp;
    $nama_pasangan  = $old['nama_pasangan'] ?? $nama_pasangan;
    $nama_anak      = $old['nama_anak'] ?? $nama_anak;
    $bidang_ilmu    = $old['bidang_ilmu'] ?? $bidang_ilmu;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Biodata Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Edit Biodata Dosen</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="read_dosen.php">Data Dosen</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="biodata" style="max-width: 800px; margin: 20px auto;">
            <h2>Form Edit Data Dosen</h2>
            
            <?php if (!empty($flash_error)): ?>
                <div style="padding:10px; margin-bottom:10px; 
                    background:#f8d7da; color:#721c24; border-radius:6px;">
                    <?= $flash_error; ?>
                </div>
            <?php endif; ?>
            
            <form action="update_dosen.php" method="POST">
                
                <input type="hidden" name="id_dosen" value="<?= (int)$id_dosen; ?>">
                
                <label><span>Kode Dosen:</span>
                    <input type="text" name="kode_dosen" 
                        value="<?= htmlspecialchars($kode_dosen); ?>" readonly style="background-color: #e9ecef;">
                    <small style="color:red;">*Kode Dosen tidak dapat diubah</small>
                </label>

                <label><span>Nama Dosen:</span>
                    <input type="text" name="nama_dosen" 
                        placeholder="Masukkan Nama Lengkap" required
                        value="<?= htmlspecialchars($nama_dosen); ?>">
                </label>

                <label><span>Alamat Rumah:</span>
                    <input type="text" name="alamat_rumah" 
                        placeholder="Masukkan Alamat Rumah"
                        value="<?= htmlspecialchars($alamat_rumah); ?>">
                </label>

                <label><span>Tanggal Jadi Dosen:</span>
                    <input type="date" name="tgl_jadi_dosen" 
                        value="<?= htmlspecialchars($tgl_jadi_dosen); ?>">
                    <small style="color: #666; font-size: 12px;">Format: YYYY-MM-DD</small>
                </label>

                <label><span>JJA Dosen:</span>
                    <input type="text" name="jja_dosen" 
                        placeholder="Contoh: Lektor Kepala"
                        value="<?= htmlspecialchars($jja_dosen); ?>">
                </label>

                <label><span>Homebase Prodi:</span>
                    <input type="text" name="homebase_prodi" 
                        placeholder="Contoh: Teknik Informatika" required
                        value="<?= htmlspecialchars($homebase_prodi); ?>">
                </label>

                <label><span>Nomor HP:</span>
                    <input type="text" name="no_hp" 
                        placeholder="Contoh: 08123456789"
                        value="<?= htmlspecialchars($no_hp); ?>">
                </label>

                <label><span>Nama Pasangan:</span>
                    <input type="text" name="nama_pasangan" 
                        placeholder="Masukkan Nama Pasangan"
                        value="<?= htmlspecialchars($nama_pasangan); ?>">
                </label>

                <label><span>Nama Anak:</span>
                    <input type="text" name="nama_anak" 
                        placeholder="Masukkan Nama Anak"
                        value="<?= htmlspecialchars($nama_anak); ?>">
                </label>

                <label><span>Bidang Ilmu Dosen:</span>
                    <input type="text" name="bidang_ilmu" 
                        placeholder="Contoh: Artificial Intelligence"
                        value="<?= htmlspecialchars($bidang_ilmu); ?>">
                </label>

                <div style="margin-top: 20px;">
                    <button type="submit">Simpan Perubahan</button>
                    
                    <a href="read_dosen.php" style="background-color: #b4b4b4; color: #272727; 
                       padding: 10px 20px; border-radius: 6px; text-decoration: none; 
                       display: inline-block; margin-left: 10px;">
                       Kembali
                    </a>
                </div>

            </form>
        </section>
    </main>
</body>
</html>