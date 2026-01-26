<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Azimutree — Android app</title>
    <meta name="description" content="Official Azimutree Android app — download, releases, and info">
    <link rel="icon" href="<?= base_url('assets/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?= base_url() ?>">
            <img src="<?= base_url('assets/icon.png') ?>" alt="Azimutree logo" class="logo" onerror="this.style.display='none'">
            <span class="brand-text">Azimutree</span>
        </a>
        <nav class="nav">
            <button id="menuToggle" class="menu-btn">☰</button>
            <ul id="menu" class="menu hidden">
                <li><a href="#download">Download</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container">
            <h1>Azimutree</h1>
            <p class="lead">A mobile app to support Forest Health Monitoring — mapping clusters, plots, and trees with offline storage.</p>
            <p class="cta">
                <a id="download" class="btn primary" href="https://github.com/asid30/azimutree-flutter/releases/latest" target="_blank">Download APK</a>
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

    <section id="panduan" class="section">
        <div class="container">
            <h2>Panduan Aplikasi Lengkap 📚🌳</h2>
            <p>Panduan berikut adalah versi lengkap dari panduan in-app — memuat langkah-langkah operasi, ikon, warna legenda, dan tips lapangan agar pengguna dapat menjalankan pengukuran secara konsisten.</p>

            <h3>1. Tampilan Dashboard 🏠</h3>
            <p>Antarmuka utama menampilkan tombol besar untuk akses cepat dan tombol kecil untuk pengaturan.</p>
            <ul>
                <li>🔲 <strong>Menu Tombol Besar</strong>: <em>Kelola Data Klaster</em>, <em>Peta Lokasi Klaster Plot</em>, <em>Panduan Aplikasi</em> — akses utama untuk operasi lapangan.</li>
                <li>⚙️ <strong>Menu Tombol Kecil</strong>: <em>Settings</em>, <em>About Aplikasi</em>, <em>Keluar</em>.</li>
                <li>📂 <strong>Sidebar</strong>: dapat dibuka dari pojok kiri atas; memuat tautan navigasi dan pengaturan.</li>
                <li>🌗 <strong>Tombol Ganti Tema</strong>: di pojok kanan atas untuk toggle Terang / Gelap.</li>
            </ul>

            <h3>2. Kelola Data Klaster Plot ✍️</h3>
            <p>Fitur utama untuk membuat, mengedit, mengimpor, dan mengekspor data klaster, plot, dan pohon.</p>

            <h4>2.1 Akses Menu & FAB ➕</h4>
            <ul>
                <li>FAB menyediakan pilihan: <strong>Input Manual</strong>, <strong>Impor Data (Excel)</strong>, <strong>Ekspor Data</strong>, <strong>Unduh Template</strong>.</li>
            </ul>

            <h4>2.2 Input Manual Klaster 🧾</h4>
            <ol>
                <li>Masukkan <strong>Kode Klaster</strong> (unik).</li>
                <li>Masukkan <strong>Nama Pengukur</strong>.</li>
                <li>Pilih <strong>Tanggal Pengukuran</strong>.</li>
                <li>Tekan <strong>Simpan</strong> untuk menyimpan klaster.</li>
            </ol>

            <h4>2.3 Input Manual Plot 📍</h4>
            <ol>
                <li>Pilih klaster yang diinginkan (dropdown).</li>
                <li>Pilih nomor plot (maks. 4 plot per klaster). Jika semua plot terisi, opsi tidak tersedia.</li>
                <li>Masukkan <strong>Latitude</strong> dan <strong>Longitude</strong>.</li>
                <li>Masukkan <strong>Altitude</strong> (opsional).</li>
            </ol>

            <h4>2.4 Input Manual Pohon 🌱</h4>
            <p>Posisi pohon bisa direkam dengan dua metode; pilih salah satu:</p>
            <ul>
                <li>🧭 <strong>Azimut & Jarak</strong> — data relatif terhadap plot pusat (sentroid).</li>
                <li>📌 <strong>Koordinat Bebas</strong> — masukkan Latitude & Longitude langsung.</li>
            </ul>
            <ol>
                <li>Pilih <strong>Klaster</strong> dan <strong>Plot</strong>.</li>
                <li>Pilih metode posisi (Azimut+Jarak atau Koordinat Bebas).</li>
                <li>Masukkan <strong>Altitude</strong> (opsional).</li>
                <li>Masukkan <strong>Kode Pohon</strong> (angka) dan <strong>Nama Pohon</strong>.</li>
                <li>Masukkan <strong>Nama Ilmiah</strong> dan <strong>Keterangan</strong> (opsional).</li>
                <li>Masukkan <strong>URL Foto</strong> (direkomendasikan Google Drive publik langsung ke file gambar).</li>
            </ol>

            <h4>2.5 Edit & Hapus Data ✏️🗑️</h4>
            <ul>
                <li>Geser item ke kiri → <strong>Edit</strong> (ubah data).</li>
                <li>Geser item ke kanan → <strong>Hapus</strong> (data terhapus permanen; tidak dapat dikembalikan).</li>
                <li>Tip: Gunakan fitur <em>Mode Debug</em> di Settings untuk generate data uji sebelum melakukan operasi massal.</li>
            </ul>

            <h4>2.6 Impor Data Menggunakan Excel 📥</h4>
            <ol>
                <li>Tekan <strong>Unduh Template</strong> untuk format Excel resmi.</li>
                <li>Isi file sesuai format — <strong>format harus persis sama</strong>.</li>
                <li>Kembali ke aplikasi → pilih <strong>Impor Data</strong>.</li>
                <li>Isi dialog impor: <em>Kode Klaster</em>, <em>Nama Pengukur</em>, <em>Tanggal Pengukuran</em>, lalu pilih file Excel.</li>
                <li>Berikan izin akses penyimpanan jika diminta, lalu tekan <strong>Impor</strong>.</li>
            </ol>
            <p><strong>Catatan:</strong> jika ada kesalahan format atau data duplikat, impor akan gagal dan menampilkan pesan error.</p>

            <h4>2.7 Ekspor Data 📤</h4>
            <p>Ekspor menghasilkan file Excel yang dapat dibagikan dan diimpor kembali oleh pengguna Azimutree lain.</p>

            <h3>3. Peta Lokasi Klaster Plot 🗺️</h3>
            <p>Peta menggunakan Mapbox dan menampilkan marker, garis relasi, serta panel informasi.</p>

            <h4>3.1 Marker dan Warna 🟢🔴🔵🟣🟠</h4>
            <ul>
                <li>🔵 <strong>Biru</strong> — Marker Plot (posisi plot).</li>
                <li>🟣 <strong>Ungu</strong> — Sentroid otomatis (jika Plot 1 belum ada).</li>
                <li>🟠 <strong>Oranye</strong> — Marker Pohon (lokasi pohon).</li>
                <li>🟢 <strong>Hijau</strong> — Pohon yang sudah diinspeksi/ditandai.</li>
                <li>🔴 <strong>Merah</strong> — Marker hasil pencarian lokasi.</li>
            </ul>

            <h4>3.2 Garis Relasi 📏</h4>
            <ul>
                <li>🟥 <strong>Garis Merah</strong>: relasi antara pohon dan plot (menunjukkan arah/azimut & jarak).</li>
                <li>🟦 <strong>Garis Biru</strong>: relasi plot→plot atau plot→sentroid.</li>
            </ul>

            <h4>3.3 Bottom Sheet Peta & Kontrol 🔎</h4>
            <ul>
                <li>🔍 <strong>Pencarian lokasi</strong> (nama kota/ tempat).</li>
                <li>🛰️ <strong>Ganti tipe peta</strong>: Satelit / Medan.</li>
                <li>📍 <strong>Lokasi pengguna</strong>: hidupkan untuk navigasi lapangan.</li>
                <li>🧭 <strong>Arahan utara</strong>: tombol reorient ke utara.</li>
            </ul>

            <h4>3.4 Interaksi Marker & Info</h4>
            <ul>
                <li>Ketuk marker → tampilkan informasi di pojok kiri atas dan bottom sheet.</li>
                <li>Fitur <strong>Center Camera</strong> memusatkan peta ke marker tertentu.</li>
            </ul>

            <h4>3.5 Map Tools (Sidebar Kanan) 🧰</h4>
            <ul>
                <li>• <strong>Klik Marker</strong> — aktifkan/ nonaktifkan interaksi sentuhan marker.</li>
                <li>• <strong>Tampilkan Legenda</strong> — tunjukkan/ sembunyikan legenda peta.</li>
                <li>• <strong>Tampilkan Info Marker</strong> — tunjukkan/ sembunyikan info marker overlay.</li>
                <li>• <strong>Workflow Inspeksi</strong> — menampilkan tombol <em>Tandai</em> pada marker; ketika ditandai, warna marker menjadi hijau.</li>
                <li>• <strong>Tampilkan Garis Relasi</strong> — hidupkan/ matikan garis relasi antar marker.</li>
            </ul>

            <h4>3.6 Navigasi Lapangan 🚶‍♂️🧭</h4>
            <p>Jika <em>Lokasi Pengguna</em> dan <em>Workflow Inspeksi</em> aktif, aplikasi menampilkan jarak & arah dari posisi pengguna ke marker terpilih — membantu peneliti menemukan pohon/plot di lapangan.</p>

            <h3>4. Settings ⚙️</h3>
            <ul>
                <li>🌗 <strong>Ganti Tema</strong> — Terang / Gelap.</li>
                <li>🐞 <strong>Mode Debug</strong> — fitur pengujian: <em>Generate data acak</em> dan <em>Hapus seluruh data</em> (hanya untuk pengujian).</li>
                <li>🔐 <strong>Keamanan</strong> — Pastikan tidak menyimpan token atau kredensial pada file yang di-commit (gunakan `.env`).</li>
            </ul>

            <h3>5. Impor / Ekspor & Template 📄</h3>
            <ul>
                <li>📥 <strong>Unduh Template</strong> untuk format Excel standar dan isi data sesuai kolom yang disediakan.</li>
                <li>⚠️ <strong>Validasi</strong>: Pastikan format dan tipe data benar agar proses impor tidak gagal.</li>
                <li>📤 <strong>Ekspor</strong> menghasilkan file Excel yang dapat dibagikan dan diimpor oleh pengguna lain.</li>
            </ul>

            <h3>6. Tips Lapangan & Best Practices ✅</h3>
            <ul>
                <li>🔋 Pastikan baterai perangkat cukup dan GPS akurat sebelum mulai pengukuran.</li>
                <li>✍️ Catat kode klaster dan tanggal pengukuran secara konsisten.</li>
                <li>🖼️ Gunakan URL gambar publik (mis. Google Drive dengan sharing publik langsung ke file image).</li>
                <li>📂 Backup data secara berkala dengan fitur ekspor.</li>
                <li>🧪 Uji impor pada file contoh sebelum melakukan impor massal di lapangan.</li>
            </ul>

            <h3>7. Masalah Umum & Solusi 🔧</h3>
            <ul>
                <li>📶 <strong>Masalah jaringan</strong> — periksa koneksi internet/perangkat dan coba kembali.</li>
                <li>❌ <strong>Impor gagal</strong> — periksa format template, pastikan tidak ada kolom kosong atau duplikat kunci.</li>
                <li>🗃️ <strong>Data tidak muncul</strong> — restart aplikasi atau periksa izin penyimpanan dan akses file.</li>
            </ul>

            <p>Panduan ini diambil dari panduan dalam aplikasi (TutorialPage). Jika ingin, saya bisa memecah panduan ini menjadi halaman terpisah, menambahkan tautan navigasi di menu, atau memperkaya dengan gambar/ikon inline.</p>
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
            <ul class="features">
                <li><strong>Visualisasi peta digital</strong> menggunakan Mapbox.</li>
                <li><strong>Penentuan posisi klaster dan plot</strong> berdasarkan koordinat geografis.</li>
                <li><strong>Informasi sudut azimut</strong>, jarak dari pusat klaster, dan jarak dari posisi pengguna.</li>
                <li><strong>Impor data</strong> dalam jumlah besar (dibatasi untuk satu klaster).</li>
                <li><strong>Ekspor data</strong> ke format Excel untuk memudahkan berbagi data antar peneliti.</li>
            </ul>

            <h3>Screenshots</h3>
            <p>Mode terang dan gelap tersedia. Lihat preview screenshot di bagian atas halaman.</p>

            <h3>Teknologi yang Digunakan</h3>
            <ul>
                <li><strong>Flutter</strong> sebagai framework pengembangan aplikasi.</li>
                <li><strong>SQLite</strong> untuk penyimpanan data lokal.</li>
                <li><strong>Mapbox</strong> untuk pemetaan dan visualisasi lokasi.</li>
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
            <p>Untuk pengembang atau pengguna lanjut, panduan instalasi dan instruksi pengembangan tersedia di README proyek pada GitHub. Untuk pengguna lapangan, pastikan perangkat memiliki koneksi dan izin yang diperlukan sebelum menggunakan fitur peta atau impor/ekspor data.</p>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?= date('Y') ?> Azimutree Project. GPLv3 Licensed. Developed by Asid30.</p>
    </div>
</footer>

<script src="<?= base_url('assets/js/app.js') ?>"></script>

</body>
</html>
