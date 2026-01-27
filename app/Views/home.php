<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
Azimutree — Aplikasi Pemantauan Kesehatan Hutan & Pemetaan
<?= $this->endSection() ?>



<?= $this->section('description') ?>
Azimutree adalah aplikasi Android open source untuk pemantauan kesehatan hutan, pemetaan, dan pengelolaan data pohon.
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <section class="hero">
        <div class="container">
            <h1>Azimutree</h1>
            <p class="lead">Forest Health Monitoring — memetakan klaster, plot, dan pohon dengan penyimpanan offline.</p>
            <p style="margin-top:.5rem;font-weight:700;color:#0b6efd">Platform: Hanya untuk Android 📱 ID 🇮🇩</p>
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
            <p><strong>Azimutree</strong> adalah aplikasi Android untuk mendukung pemantauan kesehatan hutan dengan metode Forest Health Monitoring. Aplikasi ini fokus pada pencatatan lokasi klaster dan plot serta visualisasi pada peta digital.</p>
            <p><a href="<?= base_url('about') ?>" class="app-link">Baca selengkapnya tentang aplikasi →</a></p>

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

            
        </div>
    </section>

    

<?= $this->endSection() ?>

