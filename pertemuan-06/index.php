<?php
  $nim = "2511500006";
  $nama_lengkap = "Grezelco Govin &#128512;"; 
  $tempat_lahir = "Bedukang";
  $tanggal_lahir = "27 September 2007";
  $hobi = "Badminton dan main Game";
  $pasangan = "Blum ada &#128546;";
  $anak_ke = "Anak kedua dari Dua Bersaudara";
  $nama_kakak = "viorent";
  $minum_kesukaan = "Matcha &#128525;";
  $penutup = "sekian dan terimakasih :D";

  $namaMatkul1 = "Algoritma dan Struktur Data";
  $sksMatkul1 = 4;
  $nilaiHadir1 = 90;
  $nilaiTugas1 = 60;
  $nilaiUTS1 = 80;
  $nilaiUAS1 = 70;

  $namaMatkul2 = "Agama";
  $sksMatkul2 = 2;
  $nilaiHadir2 = 70;
  $nilaiTugas2 = 50;
  $nilaiUTS2 = 60;
  $nilaiUAS2 = 80;

  $namaMatkul3 = "Basis Data";
  $sksMatkul3 = 3;
  $nilaiHadir3 = 85;
  $nilaiTugas3 = 75;
  $nilaiUTS3 = 80;
  $nilaiUAS3 = 85;

  $namaMatkul4 = "Kalkulus";
  $sksMatkul4 = 3;
  $nilaiHadir4 = 100;
  $nilaiTugas4 = 90;
  $nilaiUTS4 = 85;
  $nilaiUAS4 = 90;

  $namaMatkul5 = "Pemrograman Web Dasar";
  $sksMatkul5 = 3;
  $nilaiHadir5 = 69; 
  $nilaiTugas5 = 80;
  $nilaiUTS5 = 90;
  $nilaiUAS5 = 100;
  $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
  if ($nilaiHadir1 < 70) {
      $grade1 = "E"; $mutu1 = 0.00; $status1 = "Gagal";
  } else {
      if ($nilaiAkhir1 >= 91) { $grade1 = "A"; $mutu1 = 4.00; }
      elseif ($nilaiAkhir1 >= 81) { $grade1 = "A-"; $mutu1 = 3.70; }
      elseif ($nilaiAkhir1 >= 76) { $grade1 = "B+"; $mutu1 = 3.30; }
      elseif ($nilaiAkhir1 >= 71) { $grade1 = "B"; $mutu1 = 3.00; }
      elseif ($nilaiAkhir1 >= 66) { $grade1 = "B-"; $mutu1 = 2.70; }
      elseif ($nilaiAkhir1 >= 61) { $grade1 = "C+"; $mutu1 = 2.30; }
      elseif ($nilaiAkhir1 >= 56) { $grade1 = "C"; $mutu1 = 2.00; }
      elseif ($nilaiAkhir1 >= 51) { $grade1 = "C-"; $mutu1 = 1.70; }
      elseif ($nilaiAkhir1 >= 36) { $grade1 = "D"; $mutu1 = 1.00; }
      else { $grade1 = "E"; $mutu1 = 0.00; }
      
      if ($grade1 == "D" || $grade1 == "E") { $status1 = "Gagal"; }
      else { $status1 = "Lulus"; }
  }
  $bobot1 = $mutu1 * $sksMatkul1;

  $nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
  if ($nilaiHadir2 < 70) {
      $grade2 = "E"; $mutu2 = 0.00; $status2 = "Gagal";
  } else {
      if ($nilaiAkhir2 >= 91) { $grade2 = "A"; $mutu2 = 4.00; }
      elseif ($nilaiAkhir2 >= 81) { $grade2 = "A-"; $mutu2 = 3.70; }
      elseif ($nilaiAkhir2 >= 76) { $grade2 = "B+"; $mutu2 = 3.30; }
      elseif ($nilaiAkhir2 >= 71) { $grade2 = "B"; $mutu2 = 3.00; }
      elseif ($nilaiAkhir2 >= 66) { $grade2 = "B-"; $mutu2 = 2.70; }
      elseif ($nilaiAkhir2 >= 61) { $grade2 = "C+"; $mutu2 = 2.30; }
      elseif ($nilaiAkhir2 >= 56) { $grade2 = "C"; $mutu2 = 2.00; }
      elseif ($nilaiAkhir2 >= 51) { $grade2 = "C-"; $mutu2 = 1.70; }
      elseif ($nilaiAkhir2 >= 36) { $grade2 = "D"; $mutu2 = 1.00; }
      else { $grade2 = "E"; $mutu2 = 0.00; }
      
      if ($grade2 == "D" || $grade2 == "E") { $status2 = "Gagal"; }
      else { $status2 = "Lulus"; }
  }
  $bobot2 = $mutu2 * $sksMatkul2;
  $nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
  if ($nilaiHadir3 < 70) {
      $grade3 = "E"; $mutu3 = 0.00; $status3 = "Gagal";
  } else {
      if ($nilaiAkhir3 >= 91) { $grade3 = "A"; $mutu3 = 4.00; }
      elseif ($nilaiAkhir3 >= 81) { $grade3 = "A-"; $mutu3 = 3.70; }
      elseif ($nilaiAkhir3 >= 76) { $grade3 = "B+"; $mutu3 = 3.30; }
      elseif ($nilaiAkhir3 >= 71) { $grade3 = "B"; $mutu3 = 3.00; }
      elseif ($nilaiAkhir3 >= 66) { $grade3 = "B-"; $mutu3 = 2.70; }
      elseif ($nilaiAkhir3 >= 61) { $grade3 = "C+"; $mutu3 = 2.30; }
      elseif ($nilaiAkhir3 >= 56) { $grade3 = "C"; $mutu3 = 2.00; }
      elseif ($nilaiAkhir3 >= 51) { $grade3 = "C-"; $mutu3 = 1.70; }
      elseif ($nilaiAkhir3 >= 36) { $grade3 = "D"; $mutu3 = 1.00; }
      else { $grade3 = "E"; $mutu3 = 0.00; }
      
      if ($grade3 == "D" || $grade3 == "E") { $status3 = "Gagal"; }
      else { $status3 = "Lulus"; }
  }
  $bobot3 = $mutu3 * $sksMatkul3;

  $nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
  if ($nilaiHadir4 < 70) {
      $grade4 = "E"; $mutu4 = 0.00; $status4 = "Gagal";
  } else {
      if ($nilaiAkhir4 >= 91) { $grade4 = "A"; $mutu4 = 4.00; }
      elseif ($nilaiAkhir4 >= 81) { $grade4 = "A-"; $mutu4 = 3.70; }
      elseif ($nilaiAkhir4 >= 76) { $grade4 = "B+"; $mutu4 = 3.30; }
      elseif ($nilaiAkhir4 >= 71) { $grade4 = "B"; $mutu4 = 3.00; }
      elseif ($nilaiAkhir4 >= 66) { $grade4 = "B-"; $mutu4 = 2.70; }
      elseif ($nilaiAkhir4 >= 61) { $grade4 = "C+"; $mutu4 = 2.30; }
      elseif ($nilaiAkhir4 >= 56) { $grade4 = "C"; $mutu4 = 2.00; }
      elseif ($nilaiAkhir4 >= 51) { $grade4 = "C-"; $mutu4 = 1.70; }
      elseif ($nilaiAkhir4 >= 36) { $grade4 = "D"; $mutu4 = 1.00; }
      else { $grade4 = "E"; $mutu4 = 0.00; }
      
      if ($grade4 == "D" || $grade4 == "E") { $status4 = "Gagal"; }
      else { $status4 = "Lulus"; }
  }
  $bobot4 = $mutu4 * $sksMatkul4;
  $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
  if ($nilaiHadir5 < 70) {
      $grade5 = "E"; $mutu5 = 0.00; $status5 = "Gagal";
  } else {
      if ($nilaiAkhir5 >= 91) { $grade5 = "A"; $mutu5 = 4.00; }
      elseif ($nilaiAkhir5 >= 81) { $grade5 = "A-"; $mutu5 = 3.70; }
      elseif ($nilaiAkhir5 >= 76) { $grade5 = "B+"; $mutu5 = 3.30; }
      elseif ($nilaiAkhir5 >= 71) { $grade5 = "B"; $mutu5 = 3.00; }
      elseif ($nilaiAkhir5 >= 66) { $grade5 = "B-"; $mutu5 = 2.70; }
      elseif ($nilaiAkhir5 >= 61) { $grade5 = "C+"; $mutu5 = 2.30; }
      elseif ($nilaiAkhir5 >= 56) { $grade5 = "C"; $mutu5 = 2.00; }
      elseif ($nilaiAkhir5 >= 51) { $grade5 = "C-"; $mutu5 = 1.70; }
      elseif ($nilaiAkhir5 >= 36) { $grade5 = "D"; $mutu5 = 1.00; }
      else { $grade5 = "E"; $mutu5 = 0.00; }
      
      if ($grade5 == "D" || $grade5 == "E") { $status5 = "Gagal"; }
      else { $status5 = "Lulus"; }
  }
  $bobot5 = $mutu5 * $sksMatkul5;
  $totalBobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
  $totalSKS = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;

  if ($totalSKS > 0) {
    $IPK = $totalBobot / $totalSKS;
  } else {
    $IPK = 0;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menu-toggle" aria-label="toggle navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home"> 
            <h2>Selamat datang teman-teman</h2>
            <p>Ini contoh paragraf html</p>
        </section>

        <section id="about">
           <h2>Tentang saya</h2>
            <p><strong>NIM:</strong> <?php echo $nim; ?></p>
            <p><strong>Nama Lengkap:</strong> <?php echo $nama_lengkap; ?></p>
            <p><strong>Tempat Lahir:</strong> <?php echo $tempat_lahir; ?></p>
            <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir; ?></p>
            <p><strong>Hobi:</strong> <?php echo $hobi; ?></p>
            <p><strong>Pasangan:</strong> <?php echo $pasangan; ?></p>
            <p><strong>Anak ke brp:</strong> <?php echo $anak_ke; ?></p>
            <p><strong>Nama Kakak:</strong> <?php echo $nama_kakak; ?></p>
            <p><strong>Minum Kesukaan:</strong> <?php echo $minum_kesukaan; ?></p>
            <p><?php echo $penutup; ?></p>
        </section>

        <section id="ipk">
            <h2>Nilai Saya</h2>

            <div class="data-matkul" style="margin-bottom: 20px;">
              <h3><?php echo $namaMatkul1; ?></h3> 
              <p><strong>SKS:</strong> <?php echo $sksMatkul1; ?></p>
              <p><strong>Kehadiran:</strong> <?php echo $nilaiHadir1; ?></p>
              <p><strong>Tugas:</strong> <?php echo $nilaiTugas1; ?></p>
              <p><strong>UTS:</strong> <?php echo $nilaiUTS1; ?></p>
              <p><strong>UAS:</strong> <?php echo $nilaiUAS1; ?></p>
              
              <hr> 
              <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir1; ?></p>
              <p><strong>Grade:</strong> <?php echo $grade1; ?></p>
              <p><strong>Angka Mutu:</strong> <?php echo $mutu1; ?></p>
              <p><strong>Bobot:</strong> <?php echo $bobot1; ?></p>
              <p><strong>Status:</strong> <?php echo $status1; ?></p>
            </div>

            <div class="data-matkul" style="margin-bottom: 20px;">
              <h3><?php echo $namaMatkul2; ?></h3>
              <p><strong>SKS:</strong> <?php echo $sksMatkul2; ?></p>
              <p><strong>Kehadiran:</strong> <?php echo $nilaiHadir2; ?></p>
              <p><strong>Tugas:</strong> <?php echo $nilaiTugas2; ?></p>
              <p><strong>UTS:</strong> <?php echo $nilaiUTS2; ?></p>
              <p><strong>UAS:</strong> <?php echo $nilaiUAS2; ?></p>
              <hr>
              <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir2; ?></p>
              <p><strong>Grade:</strong> <?php echo $grade2; ?></p>
              <p><strong>Angka Mutu:</strong> <?php echo $mutu2; ?></p>
              <p><strong>Bobot:</strong> <?php echo $bobot2; ?></p>
              <p><strong>Status:</strong> <?php echo $status2; ?></p>
            </div>

            <div class="data-matkul" style="margin-bottom: 20px;">
              <h3><?php echo $namaMatkul3; ?></h3>
              <p><strong>SKS:</strong> <?php echo $sksMatkul3; ?></p>
              <p><strong>Kehadiran:</strong> <?php echo $nilaiHadir3; ?></p>
              <p><strong>Tugas:</strong> <?php echo $nilaiTugas3; ?></p>
              <p><strong>UTS:</strong> <?php echo $nilaiUTS3; ?></p>
              <p><strong>UAS:</strong> <?php echo $nilaiUAS3; ?></p>
              <hr>
              <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir3; ?></p>
              <p><strong>Grade:</strong> <?php echo $grade3; ?></p>
              <p><strong>Angka Mutu:</strong> <?php echo $mutu3; ?></p>
              <p><strong>Bobot:</strong> <?php echo $bobot3; ?></p>
              <p><strong>Status:</strong> <?php echo $status3; ?></p>
            </div>

            <div class="data-matkul" style="margin-bottom: 20px;">
              <h3><?php echo $namaMatkul4; ?></h3>
              <p><strong>SKS:</strong> <?php echo $sksMatkul4; ?></p>
              <p><strong>Kehadiran:</strong> <?php echo $nilaiHadir4; ?></p>
              <p><strong>Tugas:</strong> <?php echo $nilaiTugas4; ?></p>
              <p><strong>UTS:</strong> <?php echo $nilaiUTS4; ?></p>
              <p><strong>UAS:</strong> <?php echo $nilaiUAS4; ?></p>
              <hr>
              <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir4; ?></p>
              <p><strong>Grade:</strong> <?php echo $grade4; ?></p>
              <p><strong>Angka Mutu:</strong> <?php echo $mutu4; ?></p>
              <p><strong>Bobot:</strong> <?php echo $bobot4; ?></p>
              <p><strong>Status:</strong> <?php echo $status4; ?></p>
            </div>

            <div class="data-matkul" style="margin-bottom: 20px;">
              <h3><?php echo $namaMatkul5; ?></h3>
              <p><strong>SKS:</strong> <?php echo $sksMatkul5; ?></p>
              <p><strong>Kehadiran:</strong> <?php echo $nilaiHadir5; ?></p>
              <p><strong>Tugas:</strong> <?php echo $nilaiTugas5; ?></p>
              <p><strong>UTS:</strong> <?php echo $nilaiUTS5; ?></p>
              <p><strong>UAS:</strong> <?php echo $nilaiUAS5; ?></p>
              <hr>
              <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir5; ?></p>
              <p><strong>Grade:</strong> <?php echo $grade5; ?></p>
              <p><strong>Angka Mutu:</strong> <?php echo $mutu5; ?></p>
              <p><strong>Bobot:</strong> <?php echo $bobot5; ?></p>
              <p><strong>Status:</strong> <?php echo $status5; ?></p>
            </div>

            <div class="total-ipk">
              <hr style="border-width: 2px; border-color: black;"> 
              <p><strong>Total Bobot:</strong> <?php echo $totalBobot; ?></p>
              <p><strong>Total SKS:</strong> <?php echo $totalSKS; ?></p>
              
              <h3>IPK: <?php echo number_format($IPK, 2); ?></h3> 
            </div>
        </section>
                
        <section id="contact">
            <h2>~~Kontak saya~~</h2>
            <form action="" method="get">
                <label for="txtNama"><span>Nama:</span>
                <div class="input-wrapper">
                <input type="text" id="txtNama" name="txtNama" placeholder="masukkan nama" required autocomplete="name">
                </div>
                </label>

                <label for="txtEmail"><span>Email:</span>
                <div class="input-wrapper">
                <input type="text" id="txtEmail" placeholder="masukkan email" required autocomplete="email">
                </div>
                </label>

                <label for="txtPesan"><span>pesan anda:</span>
                <div class="input-wrapper">
                <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
                <small id="charCount">0/200 karakter</small>
                </div>
                </label>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Grezelco Govin [2511500006]</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>