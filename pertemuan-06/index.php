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
