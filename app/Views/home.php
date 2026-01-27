<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="google-site-verification" content="GXMHZxGwGj0w8a1Bv6mnSBIyeqvFQL0WpJ9P3jbzxHE">
    <title>Azimutree — Android app</title>
    <meta name="description" content="Official Azimutree Android app — download, releases, and info">
    <link rel="icon" href="<?= base_url('assets/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<header class="site-header appbar">
    <div class="container appbar-inner">
        <div class="appbar-left">
            <a class="brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/icon.png') ?>" alt="Azimutree logo" class="logo" onerror="this.style.display='none'">
                <span class="brand-text">Azimutree</span>
            </a>
        </div>
        <div class="appbar-right">
            <nav class="appbar-nav">
                <a class="app-link" href="<?= base_url() ?>">Beranda</a>
                <a class="app-link" href="<?= base_url('panduan') ?>">Panduan Aplikasi</a>
                <a class="app-link" href="https://docs.google.com/spreadsheets/d/1EN-vjd3Tn1Q1wAyW599V07c_YIaMHK4fgSvLvuOS3pI/edit?usp=sharing" target="_blank" rel="noopener">Template Excel</a>
                <a class="app-link" href="https://saweria.co/asid30" target="_blank" rel="noopener">☕ Dukungan</a>
            </nav>
            <button id="menuToggle" class="menu-btn" aria-label="Toggle menu">☰</button>
        </div>
    </div>
</header>

<!-- Mobile sidebar (toggled by #menuToggle) -->
<nav id="menu" class="mobile-sidebar hidden" aria-hidden="true">
    <div class="container">
        <a class="app-link" href="<?= base_url() ?>">Beranda</a>
        <a class="app-link" href="<?= base_url('panduan') ?>">Panduan Aplikasi</a>
        <a class="app-link" href="https://docs.google.com/spreadsheets/d/1EN-vjd3Tn1Q1wAyW599V07c_YIaMHK4fgSvLvuOS3pI/edit?usp=sharing" target="_blank" rel="noopener">Template Excel</a>
        <a class="app-link" href="https://saweria.co/asid30" target="_blank" rel="noopener">☕ Dukungan</a>
    </div>
</nav>

<main>
    <section class="hero">
        <div class="container">
            <h1>Azimutree</h1>
            <p class="lead">Aplikasi seluler untuk mendukung Forest Health Monitoring — memetakan klaster, plot, dan pohon dengan penyimpanan offline.</p>
            <p style="margin-top:.5rem;font-weight:700;color:#0b6efd">Platform: Hanya untuk Android 📱</p>
            <p class="cta">
                <a id="download" class="btn primary" href="https://github.com/asid30/azimutree-flutter/releases/download/v1.1.26/app-release-azimutree-v1.1.26.apk" target="_blank">Download APK</a>
                <a class="btn ghost" href="https://github.com/asid30/azimutree-flutter" target="_blank">View on GitHub</a>
            </p>

            <div class="screenshot-slider">
                <div class="slider-container">
                    <div class="screenshots">
                        <img src="<?= base_url('assets/1.jpg') ?>" alt="Screenshot 1" onerror="this.style.display='none'">
                        <img src="<?= base_url('assets/2.jpg') ?>" alt="Screenshot 2" onerror="this.style.display='none'">
                        <img src="<?= base_url('assets/3.jpg') ?>" alt="Screenshot 3" onerror="this.style.display='none'">
                        <img src="<?= base_url('assets/4.jpg') ?>" alt="Screenshot 4" onerror="this.style.display='none'">
                        <img src="<?= base_url('assets/5.jpg') ?>" alt="Screenshot 5" onerror="this.style.display='none'">
                        <img src="<?= base_url('assets/6.jpg') ?>" alt="Screenshot 6" onerror="this.style.display='none'">
                    </div>
                </div>
                <div class="slider-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                    <span class="dot" data-slide="3"></span>
                    <span class="dot" data-slide="4"></span>
                    <span class="dot" data-slide="5"></span>
                </div>
            </div>
        </div>
    </section>

    

    <section id="features" class="section">
        <div class="container">
            <h2>Tentang Aplikasi</h2>
            <p><strong>Azimutree</strong> adalah aplikasi Android yang dikembangkan untuk membantu proses <strong>pemantauan kesehatan hutan</strong> menggunakan metode <strong>Forest Health Monitoring (FHM)</strong>. Aplikasi ini dirancang untuk mendukung kegiatan penelitian lapangan, khususnya dalam memetakan dan memvisualisasikan lokasi <em>klaster plot</em> pada peta digital.</p>

            <h3>Latar Belakang</h3>
            <p>Dalam penelitian kesehatan hutan, kondisi lingkungan dapat berubah dari waktu ke waktu akibat faktor internal maupun eksternal. Perubahan ini sering menyebabkan lokasi klaster plot hasil penelitian terdahulu mengalami perbedaan kondisi vegetasi dan lingkungan, sehingga menyulitkan peneliti saat melakukan pengamatan lanjutan.</p>
            <p>Permasalahan semakin kompleks karena pengamatan kesehatan hutan dilakukan secara berkala dan tidak jarang melibatkan peneliti yang berbeda. Meskipun data penelitian sebelumnya biasanya menyertakan koordinat lokasi, data tersebut umumnya masih disimpan dalam bentuk file Excel, sehingga kurang praktis untuk digunakan langsung di lapangan.</p>

            <h3>Konsep Klaster Plot</h3>
            <p>Dalam metode Forest Health Monitoring, satu <strong>klaster</strong> terdiri dari beberapa <strong>plot</strong>, dengan ketentuan:</p>
            <p><img src="<?= base_url('assets/dark-cl-plot.png') ?>" alt="Konsep Klaster Plot" class="content-figure"></p>
            <ul>
                <li>Satu klaster maksimal memiliki <strong>4 plot</strong>.</li>
                <li><strong>Plot 1</strong> berfungsi sebagai <em>sentroid</em> (pusat klaster).</li>
                <li>Plot lainnya mengelilingi plot pusat.</li>
                <li>Setiap plot terdiri dari beberapa pohon terpilih yang merepresentasikan kondisi kesehatan hutan.</li>
            </ul>
            <p>Struktur ini penting untuk memastikan konsistensi dan akurasi data dalam setiap periode penelitian.</p>

            <h3>Tujuan Aplikasi</h3>
            <p>Azimutree dikembangkan untuk menjawab kebutuhan peneliti kesehatan hutan dalam:</p>
            <ul>
                <li>Memvisualisasikan titik koordinat klaster dan plot pada peta digital.</li>
                <li>Mempermudah peneliti menemukan kembali lokasi penelitian sebelumnya di lapangan.</li>
                <li>Mengurangi kesalahan penentuan posisi plot akibat perubahan kondisi hutan.</li>
            </ul>
            <p>Aplikasi ini berfokus pada pencatatan dan visualisasi lokasi, bukan pada pencatatan detail nilai kesehatan pohon atau hutan.</p>

            <h3>Fitur Utama</h3>
            <div class="features">
                <div class="feature-card feature-1">
                    <h4>Visualisasi peta digital</h4>
                    <p>Menggunakan Mapbox untuk menampilkan peta, marker, dan layer informasi klaster/plot.</p>
                </div>
                <div class="feature-card feature-2">
                    <h4>Penentuan posisi klaster dan plot</h4>
                    <p>Menentukan posisi akurat klaster dan plot berdasarkan koordinat geografis (latitude/longitude).</p>
                </div>
                <div class="feature-card feature-3">
                    <h4>Informasi azimut & jarak</h4>
                    <p>Menampilkan sudut azimut, jarak dari pusat klaster, dan jarak dari posisi pengguna untuk navigasi lapangan.</p>
                </div>
                <div class="feature-card feature-4">
                    <h4>Impor Data Massal</h4>
                    <p>Impor data dari file Excel untuk memudahkan input sejumlah besar titik (dibatasi per klaster).</p>
                </div>
                <div class="feature-card feature-5">
                    <h4>Ekspor & Berbagi</h4>
                    <p>Ekspor data klaster/plot ke format Excel agar mudah dibagikan dan diolah lebih lanjut.</p>
                </div>
            </div>

            <h3>Teknologi yang Digunakan</h3>
            <ul>
                <li><strong><a href="https://flutter.dev" target="_blank" rel="noopener">Flutter</a></strong> sebagai framework pengembangan aplikasi.</li>
                <li><strong><a href="https://www.sqlite.org" target="_blank" rel="noopener">SQLite</a></strong> untuk penyimpanan data lokal.</li>
                <li><strong><a href="https://www.mapbox.com" target="_blank" rel="noopener">Mapbox</a></strong> untuk pemetaan dan visualisasi lokasi.</li>
            </ul>

            <h3>Manfaat</h3>
            <ul>
                <li>Mempermudah pengamatan ulang di lokasi yang sama pada periode berikutnya.</li>
                <li>Menghemat waktu pencarian lokasi klaster dan plot di lapangan.</li>
                <li>Memungkinkan berbagi data lokasi penelitian secara lebih praktis dan terstruktur.</li>
            </ul>
        </div>
    </section>

    <section id="about" class="section muted">
        <div class="container">
            <h2>Catatan & Petunjuk</h2>
            <p><strong>Perhatian:</strong> Aplikasi Azimutree hanya dikembangkan untuk perangkat Android.</p>
            <p>Untuk pengembang atau pengguna lanjut, panduan instalasi dan instruksi pengembangan tersedia di README proyek pada GitHub. Untuk pengguna lapangan, pastikan perangkat memiliki koneksi dan izin yang diperlukan sebelum menggunakan fitur peta atau impor/ekspor data.</p>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="container">
        <p>© 2026 Azimutree. Licensed under the MIT License. Dev by Asid30</p>
    </div>
</footer>

<!-- Download Confirmation Modal -->
<div id="downloadModal" class="modal hidden" role="dialog" aria-modal="true" aria-labelledby="downloadModalTitle">
    <div class="modal-backdrop"></div>
    <div class="modal-box" role="document">
        <h3 id="downloadModalTitle">Anda akan mengunduh aplikasi ini</h3>
        <p class="muted" style="margin-top:.5rem">⚠️ Catatan: Aplikasi ini diinstal di luar Play Store.<br>Aktifkan “Izinkan dari sumber ini” saat diminta oleh Android.</p>
        <div class="modal-actions" style="margin-top:1rem">
            <button id="downloadConfirm" class="btn primary">Lanjutkan dan Unduh</button>
            <button id="downloadCancel" class="btn ghost">Batal</button>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/app.js') ?>"></script>

</body>
</html>
