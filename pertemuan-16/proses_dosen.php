<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

# Cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('index.php#biodata');
}

# Ambil dan bersihkan nilai dari form biodata dosen
# Menggunakan null coalescing (?? '') untuk mencegah error undefined index
$kode_dosen     = bersihkan($_POST['kode_dosen'] ?? '');
$nama_dosen     = bersihkan($_POST['nama_dosen'] ?? '');
$alamat_rumah   = bersihkan($_POST['alamat_rumah'] ?? '');
$tgl_jadi_dosen = bersihkan($_POST['tgl_jadi_dosen'] ?? '');
$jja_dosen      = bersihkan($_POST['jja_dosen'] ?? '');
$homebase_prodi = bersihkan($_POST['homebase_prodi'] ?? '');
$no_hp          = bersihkan($_POST['no_hp'] ?? '');
$nama_pasangan  = bersihkan($_POST['nama_pasangan'] ?? '');
$nama_anak      = bersihkan($_POST['nama_anak'] ?? '');
$bidang_ilmu    = bersihkan($_POST['bidang_ilmu'] ?? '');

# Validasi input
$errors = [];

# Validasi Kode Dosen (Wajib diisi)
if (empty($kode_dosen)) {
    $errors[] = 'Kode Dosen/NIDN wajib diisi.';
}

# Validasi Nama Dosen
if (empty($nama_dosen)) {
    $errors[] = 'Nama Dosen wajib diisi.';
} elseif (strlen($nama_dosen) < 2) {
    $errors[] = 'Nama Dosen minimal 2 karakter.';
}

# Validasi Tanggal Jadi Dosen (Jika diisi, cek formatnya)
if (!empty($tgl_jadi_dosen)) {
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $tgl_jadi_dosen)) {
        if (preg_match('/^\d{2}-\d{2}-\d{4}$/', $tgl_jadi_dosen)) {
            # Format DD-MM-YYYY diubah menjadi YYYY-MM-DD
            $date_parts = explode('-', $tgl_jadi_dosen);
            $tgl_jadi_dosen = $date_parts[2] . '-' . $date_parts[1] . '-' . $date_parts[0];
        } else {
            $errors[] = 'Format tanggal tidak valid. Gunakan format YYYY-MM-DD.';
        }
    }
} else {
    # Jika kosong, set NULL atau biarkan string kosong (tergantung struktur DB, disini kita anggap string kosong)
    // $errors[] = 'Tanggal Menjadi Dosen wajib diisi.'; // Uncomment jika wajib
}

# Validasi Homebase Prodi
if (empty($homebase_prodi)) {
    $errors[] = 'Homebase Prodi wajib diisi.';
}

# Cek duplikasi Kode Dosen (Primary Key Check)
if (empty($errors)) {
    $check_kode = "SELECT id_dosen FROM tbl_dosen WHERE kode_dosen = ?";
    $stmt_check = mysqli_prepare($conn, $check_kode);
    mysqli_stmt_bind_param($stmt_check, "s", $kode_dosen);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);
    
    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        $errors[] = 'Kode Dosen/NIDN sudah terdaftar.';
    }
    mysqli_stmt_close($stmt_check);
}

# Jika ada error, simpan nilai lama dan redirect
if (!empty($errors)) {
    $_SESSION['old_dosen'] = [
        'kode_dosen'     => $kode_dosen,
        'nama_dosen'     => $nama_dosen,
        'alamat_rumah'   => $alamat_rumah,
        'tgl_jadi_dosen' => $tgl_jadi_dosen,
        'jja_dosen'      => $jja_dosen,
        'homebase_prodi' => $homebase_prodi,
        'no_hp'          => $no_hp,
        'nama_pasangan'  => $nama_pasangan,
        'nama_anak'      => $nama_anak,
        'bidang_ilmu'    => $bidang_ilmu
    ];
    
    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('index.php#biodata');
}

# Simpan data ke session (opsional, jika ingin ditampilkan di section about/preview)
$_SESSION['biodata_dosen'] = [
    "kode"    => $kode_dosen,
    "nama"    => $nama_dosen,
    "alamat"  => $alamat_rumah,
    "tgl"     => $tgl_jadi_dosen,
    "jja"     => $jja_dosen,
    "prodi"   => $homebase_prodi,
    "hp"      => $no_hp,
    "pasangan"=> $nama_pasangan,
    "anak"    => $nama_anak,
    "bidang"  => $bidang_ilmu
];

# Insert data ke database menggunakan prepared statement
$sql = "INSERT INTO tbl_dosen (
            kode_dosen, nama_dosen, alamat_rumah, tgl_jadi_dosen, 
            jja_dosen, homebase_prodi, no_hp, nama_pasangan, nama_anak, bidang_ilmu
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal): ' . mysqli_error($conn);
    redirect_ke('index.php#biodata');
}

# Bind parameter (10 string 's') dan eksekusi
mysqli_stmt_bind_param($stmt, "ssssssssss", 
    $kode_dosen, $nama_dosen, $alamat_rumah, $tgl_jadi_dosen, 
    $jja_dosen, $homebase_prodi, $no_hp, $nama_pasangan, $nama_anak, $bidang_ilmu
);

if (mysqli_stmt_execute($stmt)) {
    unset($_SESSION['old_dosen']); # Hapus data lama di session jika sukses
    $_SESSION['flash_sukses'] = 'Data biodata Dosen berhasil disimpan!';
    redirect_ke('read_dosen.php'); # Redirect ke halaman tabel
} else {
    $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
    # Simpan kembali inputan user agar tidak perlu mengetik ulang
    $_SESSION['old_dosen'] = [
        'kode_dosen'     => $kode_dosen,
        'nama_dosen'     => $nama_dosen,
        'alamat_rumah'   => $alamat_rumah,
        'tgl_jadi_dosen' => $tgl_jadi_dosen,
        'jja_dosen'      => $jja_dosen,
        'homebase_prodi' => $homebase_prodi,
        'no_hp'          => $no_hp,
        'nama_pasangan'  => $nama_pasangan,
        'nama_anak'      => $nama_anak,
        'bidang_ilmu'    => $bidang_ilmu
    ];
    redirect_ke('index.php#biodata');
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>