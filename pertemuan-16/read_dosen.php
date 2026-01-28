<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_dosen ORDER BY id_dosen DESC";
  $q = mysqli_query($conn, $sql);

  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="style.css"> </head>
<body>

<div style="width: 90%; margin: 20px auto;">
    
    <h2>Daftar Data Dosen</h2>
    <a href="index.php#biodata" style="display:inline-block; margin-bottom:10px; padding:5px 10px; background:#003366; color:white; text-decoration:none; border-radius:4px;">+ Tambah Dosen Baru</a>

    <?php
      $flash_sukses = $_SESSION['flash_sukses'] ?? '';
      $flash_error  = $_SESSION['flash_error'] ?? '';
      
      unset($_SESSION['flash_sukses'], $_SESSION['flash_error']); 
    ?>

    <?php if (!empty($flash_sukses)): ?>
        <div style="padding:10px; margin-bottom:10px; 
            background:#d4edda; color:#155724; border-radius:6px;">
            <?= $flash_sukses; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($flash_error)): ?>
        <div style="padding:10px; margin-bottom:10px; 
            background:#f8d7da; color:#721c24; border-radius:6px;">
            <?= $flash_error; ?>
        </div>
    <?php endif; ?>

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
      <tr style="background-color: #f2f2f2;">
        <th>No</th>
        <th>Aksi</th>
        <th>Kode Dosen</th>
        <th>Nama Dosen</th>
        <th>Homebase Prodi</th>
        <th>JJA</th>
        <th>No HP</th>
        <th>Bidang Ilmu</th>
        </tr>
      
      <?php $i = 1; ?>
      <?php while ($row = mysqli_fetch_assoc($q)): ?>
        <tr>
          <td style="text-align:center;"><?= $i++ ?></td>
          <td style="white-space: nowrap;">
            <a href="edit_dosen.php?id=<?= (int)$row['id_dosen']; ?>" style="color: blue; text-decoration: none;">Edit</a> 
            | 
            <a onclick="return confirm('Yakin ingin menghapus dosen <?= htmlspecialchars($row['nama_dosen']); ?>?')" 
               href="delete_dosen.php?id=<?= (int)$row['id_dosen']; ?>" 
               style="color: red; text-decoration: none;">Delete</a>
          </td>
          
          <td><?= htmlspecialchars($row['kode_dosen']); ?></td>
          <td><?= htmlspecialchars($row['nama_dosen']); ?></td>
          <td><?= htmlspecialchars($row['homebase_prodi']); ?></td>
          <td><?= htmlspecialchars($row['jja_dosen']); ?></td>
          <td><?= htmlspecialchars($row['no_hp']); ?></td>
          <td><?= htmlspecialchars($row['bidang_ilmu']); ?></td>
        </tr>
      <?php endwhile; ?>
      
      <?php if(mysqli_num_rows($q) == 0): ?>
        <tr>
            <td colspan="8" style="text-align:center;">Belum ada data dosen.</td>
        </tr>
      <?php endif; ?>

    </table>

</div>

</body>
</html>