<?php
session_start();
$Nim        = $_SESSION["Nim"]        ?? "";
$Name       = $_SESSION["Name"]       ?? "";
$tempat     = $_SESSION["tempat"]     ?? "";
$Lahir  = $_SESSION["Lahir"]  ?? "";
$hobi       = $_SESSION["hobi"]       ?? "";
$pasangan   = $_SESSION["pasangan"]   ?? "";
$pekerjaan  = $_SESSION["pekerjaan"]  ?? "";
$tua       = $_SESSION["tua"]       ?? "";
$kakak      = $_SESSION["kakak"]      ?? "";
$adik       = $_SESSION["adik"]       ?? "";
$sesnama  = $_SESSION["sesnama"]  ?? "";
$sesemail = $_SESSION["sesemail"] ?? "";
$sespesan = $_SESSION["sespesan"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
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
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id ="pendaftaran">
    <h2>Pendaftaran Profil Pengunjung</h2>

    <form action="proses.php" method="POST">
    <label for="txtNIM"><span>NIM:</span>
    <input type="text" id="txtNIM" name="txtNIM" placeholder="Masukkan NIM" required autocomplete="NIM">
    </label>

    <label for="txtName"><span>Nama Lengkap:</span>
    <input type="text" id="txtName" name="txtName" placeholder="Masukkan Nama Lengkap" required autocomplete="Name">
    </label>

    <label for="txtLahir"><span>Tempat Lahir:</span>
    <input type="text" id="txtLahir" name="txtNama" placeholder="Tempat Lahir" required autocomplete="Lahir">
    </label>

    <label for="txtTanggal"><span>Tanggal lahir:</span>
    <input type="text" id="txtTanggal" name="txtTanggal" placeholder="Masukkan Tanggal Lahir" required autocomplete="Tanggal">
    </label>

    <label for="txtHobi"><span>Hobi:</span>
    <input type="text" id="txtHobi" name="txtHobi" placeholder="Masukkan Hobi" required autocomplete="Hobi">
    </label>

    <label for="txtPasangan"><span>Pasangan:</span>
    <input type="text" id="txtPasangan" name="txtPasangan" placeholder="Masukkan pasangan" required autocomplete="Pasangan">
    </label>

    <label for="txtpekerjaan"><span>pekerjaan:</span>
    <input type="text" id="txtpekerjaan" name="txtpekerjaan" placeholder="Masukkan Pekerjaan" required autocomplete="pekerjaan">
    </label>

    <label for="txtTua"><span>Nama Orang Tua:</span>
    <input type="text" id="txtTua" name="txtTua" placeholder="Masukkan Nama Orang Tua" required autocomplete="Tua">
    </label>

    <label for="txtKakak"><span>Nama Kakak:</span>
    <input type="text" id="txtKakak" name="txtKakak" placeholder="Masukkan Nama Kakak" required autocomplete="Kakak">
    </label>

    <label for="txtAdik"><span>Nama Adik:</span>
    <input type="text" id="txtAdik" name="txtAdik" placeholder="Nama Adik" required autocomplete="Adik">
    </label>

    <button type="submit1">Kirim</button>
    <button type="reset1">Batal</button>
    </label>
    </section>
    </form>

    <section id="about">
      <?php
      $nim = 2511500010;
      $NIM = '0344300002';
      $nama = "Say'yid Abdullah";
      $Nama = 'Al\'kautar Benyamin';
      $tempat = "Jebus";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong> <?php echo $tempat; ?></p>
      <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
      <p><strong>Hobi:</strong> Memasak, coding, dan bermain musik &#127926;</p>
      <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
      <p><strong>Pekerjaan:</strong> Dosen di ISB Atma Luhur &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong> Bapak Setiawan dan Ibu Maria</p>
      <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
      <p><strong>Nama Adik:</strong> <?php echo $sespesan ?></p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>