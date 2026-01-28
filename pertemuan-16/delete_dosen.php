<?php
  session_start();
  require __DIR__ . '/koneksi.php';
  require_once __DIR__ . '/fungsi.php';

  $id_dosen = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);

  if (!$id_dosen) {
    $_SESSION['flash_error'] = 'ID Dosen Tidak Valid.';
    redirect_ke('read_dosen.php');
  }

  $stmt = mysqli_prepare($conn, "DELETE FROM tbl_dosen
                           WHERE id_dosen = ?");
                           
  if (!$stmt) {

    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('read_dosen.php');
  }

  mysqli_stmt_bind_param($stmt, "i", $id_dosen);

  if (mysqli_stmt_execute($stmt)) { 

    $_SESSION['flash_sukses'] = 'Data dosen berhasil dihapus.';
  } else { 

    $_SESSION['flash_error'] = 'Data gagal dihapus. Silakan coba lagi.';
  }
  
  mysqli_stmt_close($stmt);

  redirect_ke('read_dosen.php');
?>