<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Mahasiswa TI UIR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Portofolio</h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#skill">Skill</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="hero">
            <img src="Foto.jpeg" alt="Foto Profil" class="profile-img">
            <div class="hero-text">
                <h2>Bima Nugroho</h2>
                <h3 id="typing"></h3>
                <p>Mahasiswa Teknik Informatika Universitas Islam Riau yang memiliki minat pada Web Development, UI/UX Design, dan Teknologi Informasi.</p>
                <a href="#contact" class="btn">Hubungi Saya</a>
            </div>
        </section>

        <section id="about">
            <h2>Tentang Saya</h2>
            <p>Halo, saya Bima Nugroho, mahasiswa Teknik Informatika Universitas Islam Riau.</p>
            <p>Saya tertarik pada Web Development dan Database.</p>
        </section>

        <section id="education">
            <h2>Riwayat Pendidikan</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>Institusi</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024 - Sekarang</td>
                        <td>Universitas Islam Riau</td>
                        <td>Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td>2020 - 2024</td>
                        <td>SMA Negeri 1 Langgam</td>
                        <td>IPS</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="skill">
            <h2>Keahlian</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript Dasar</li>
                <li>PHP</li>
                <li>MySQL</li>
            </ul>
        </section>

        <section id="contact">
            <h2>Hubungi Saya</h2>
            <p>Email : bimanugroho566@gmail.com</p>
            <p>WhatsApp : 083183435395</p>

           <form action="proses_kontak.php" method="POST">

<input type="text" name="nama">

<textarea name="pesan"></textarea>

<button type="submit" name="kirim">
Kirim Pesan
</button>

</form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Teknik Informatika UIR. Disusun oleh Bima Nugroho.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>