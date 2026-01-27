<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Panduan Azimutree</title>
    <meta name="description" content="Panduan lengkap penggunaan Azimutree — instruksi fitur, impor/ekspor, dan tips lapangan untuk pengguna Android.">
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
    <section class="section">
        <div class="container">
            <h2>Panduan Aplikasi Lengkap 📚🌳</h2>
            <p><strong>Perhatian:</strong> Aplikasi Azimutree hanya dikembangkan untuk perangkat Android.</p>
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

        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <p>© 2026 Azimutree. Licensed under the MIT License. Dev by Asid30</p>
    </div>
</footer>

<script src="<?= base_url('assets/js/app.js') ?>"></script>

</body>
</html>
