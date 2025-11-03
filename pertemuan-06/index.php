<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas HTML</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menu-toggle" aria-label="toggle navigation">
            &#9776
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
        <?php
        $nim = "2511500006";
        $nama_lengkap = "Grezelco Govin &#128512";
        $tempat_lahir = "Bedukang";
        $tanggal_lahir = "27 September 2007";
        $hobi = "Badminton dan main Game";
        $pasangan = "Blum ada &#128546";
        $anak_ke = "Anak kedua dari Dua Bersaudara";
        $nama_kakak = "viorent";
        $minum_kesukaan = "Matcha &#128525";
        $penutup = "sekian dan terimakasih :D";
        ?>
        <section id="about">
           <h2>Tentang saya</h2>
            <p><strong>NIM:</strong> <?php echo $nim; ?></p>
            <p><strong>Nama Lengkap:</strong> <?php echo $nama_lengkap; ?></p>
            <p><strong>Tempat Lahir:</strong> <?php echo $tempat_lahir; ?></p>
            <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir; ?></p>
            <p><strong>Hobi:</strong> <?php echo $hobi ?></p>
            <p><strong>Pasangan:</strong> <?php echo $pasangan ?></p>
            <p><strong>Anak ke brp:</strong> <?php echo $anak_ke ?></p>
            <p><strong>Nama Kakak:</strong> <?php echo $nama_kakak ?></p>
            <p><strong>Minum Kesukaan:</strong> <?php echo $minum_kesukaan ?></p>
            <p><strong><?php echo $penutup; ?></strong>
        </section>
       <?php
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

        $nilaiAkhir1 = 73;
        $grade1 = "B";
        $mutu1 = 3.00;
        $bobot1 = 12;
        $status1 = "LULUS";

        $nilaiAkhir2 = 67;
        $grade2 = "B-";
        $mutu2 = 2.70;
        $bobot2 = 5.40;
        $status2 = "LULUS";

        $nilaiAkhir3 = 
        $grade3 = 
        $mutu3 = 
        $bobot3 = 
        $status3 = 

        $nilaiAkhir4 = 
        $grade4 = 
        $mutu4 = 
        $bobot4 = 
        $status4 = 

        $nilaiAkhir5 = 90;
        $grade5 = "E";
        $mutu5 = 0.00;
        $bobot5 = 0.00;
        $status5 = "GAGAL";

        $totalBobot = 54;
        $totalSKS = 20;
        $IPK = 2.70;
        ?>

        <section id="ipk">
    <h2>Nilai Saya</h2>
    <h3><?php echo $namaMatkul1; ?></h3> 

    <p><strong>SKS:</strong> <?php echo $sksMatkul1; ?></p>
    <p><strong>Kehadiran:</strong> <?php echo $nilaiHadir1; ?></p>
    <p><strong>Tugas:</strong> <?php echo $nilaiTugas1; ?></p>
    <p><strong>UTS:</strong> <?php echo $nilaiUTS1; ?></p>
    <p><strong>UAS:</strong> <?php echo $nilaiUAS1; ?></p>
    
    <hr> <p><strong>Nilai Akhir:</strong> <?php echo $nilaiAkhir1; ?></p>
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
    <hr style="border-width: 2px; border-color: black;"> <p><strong>Total Bobot:</strong> <?php echo $totalBobot; ?></p>
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
