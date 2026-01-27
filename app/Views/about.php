<?= $this->extend('layout') ?>

<?= $this->section('title') ?>Tentang Azimutree<?= $this->endSection() ?>

<?= $this->section('description') ?>Informasi lengkap tentang aplikasi Azimutree, latar belakang, konsep klaster, tujuan, dan manfaat.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="container">
            <h2>🔎 Tentang Aplikasi</h2>
            <p><strong>Azimutree</strong> adalah aplikasi Android yang dikembangkan untuk membantu proses <strong>pemantauan kesehatan hutan</strong> menggunakan metode <strong>Forest Health Monitoring (FHM)</strong>. Aplikasi ini dirancang untuk mendukung kegiatan penelitian lapangan, khususnya dalam memetakan dan memvisualisasikan lokasi <em>klaster plot</em> pada peta digital.</p>

            <h3>📚 Latar Belakang</h3>
            <p>Dalam penelitian kesehatan hutan, kondisi lingkungan dapat berubah dari waktu ke waktu akibat faktor internal maupun eksternal. Perubahan ini sering menyebabkan lokasi klaster plot hasil penelitian terdahulu mengalami perbedaan kondisi vegetasi dan lingkungan, sehingga menyulitkan peneliti saat melakukan pengamatan lanjutan.</p>

            <h3>🌲 Konsep Klaster Plot</h3>
            <p>Dalam metode Forest Health Monitoring, satu <strong>klaster</strong> terdiri dari beberapa <strong>plot</strong>, dengan ketentuan:</p>
            <ul>
                <li>Satu klaster maksimal memiliki <strong>4 plot</strong>.</li>
                <li><strong>Plot 1</strong> berfungsi sebagai <em>sentroid</em> (pusat klaster).</li>
                <li>Plot lainnya mengelilingi plot pusat.</li>
                <li>Setiap plot terdiri dari beberapa pohon terpilih yang merepresentasikan kondisi kesehatan hutan.</li>
            </ul>
            <p style="margin-top:1rem">
                <img loading="lazy" class="cluster-plot" src="<?= base_url('assets/dark-cl-plot.png') ?>" alt="Ilustrasi konsep klaster plot">
            </p>

            <h3>🎯 Tujuan Aplikasi</h3>
            <p>Azimutree dikembangkan untuk mempermudah peneliti memvisualisasikan titik koordinat klaster dan plot, menemukan kembali lokasi penelitian sebelumnya di lapangan, dan mengurangi kesalahan penentuan posisi plot akibat perubahan kondisi hutan.</p>

            <h3>✅ Manfaat</h3>
            <ul>
                <li>Mempermudah pengamatan ulang di lokasi yang sama pada periode berikutnya.</li>
                <li>Menghemat waktu pencarian lokasi klaster dan plot di lapangan.</li>
                <li>Memungkinkan berbagi data lokasi penelitian secara lebih praktis dan terstruktur.</li>
            </ul>

            <h3>🧰 Teknologi yang Digunakan</h3>
            <ul>
                <li><strong><a href="https://flutter.dev" target="_blank" rel="noopener">Flutter</a></strong> sebagai framework pengembangan aplikasi.</li>
                <li><strong><a href="https://www.sqlite.org" target="_blank" rel="noopener">SQLite</a></strong> untuk penyimpanan data lokal.</li>
                <li><strong><a href="https://www.mapbox.com" target="_blank" rel="noopener">Mapbox</a></strong> untuk pemetaan dan visualisasi lokasi.</li>
            </ul>

            <p style="margin-top:1rem;font-weight:700">🤝 Dukungan & Sponsor</p>
            <p>Jika Anda ingin mendukung pengembangan, klik tombol di bawah untuk memberi dukungan melalui Saweria.</p>
            <div class="support-actions" style="margin-top:1rem">
                <a class="btn primary" href="https://saweria.co/asid30" target="_blank" rel="noopener">☕ Dukung lewat Saweria</a>
                <a class="btn ghost github-follow" href="https://github.com/asid30" target="_blank" rel="noopener">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" style="margin-right:.5rem">
                        <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82A7.65 7.65 0 018 4.58c.68.003 1.36.092 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.28.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                    Follow @asid30
                </a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>⚙️ Teknis</h2>
            <p>Bagian ini menjelaskan aspek teknis terkait <strong>keamanan data</strong>, <strong>izin aplikasi</strong>, dan perilaku penyimpanan/transfer data.</p>

            <h3>🔐 Keamanan Data Pengguna</h3>
            <ul>
                <li>Data lokasi, klaster, plot, dan metadata disimpan secara lokal pada perangkat menggunakan <strong>SQLite</strong>. Data tidak dikirimkan ke server pusat oleh aplikasi secara default.</li>
                <li>Jika Anda mengekspor data ke file Excel, berkas tersebut akan disimpan ke penyimpanan perangkat (atau lokasi yang Anda pilih saat menggunakan fitur <em>file picker</em>), sehingga pastikan perangkat Anda aman.</li>
                <li>Aplikasi tidak melakukan sinkronisasi otomatis ke layanan cloud; setiap mekanisme berbagi (mis. kirim file atau unggah manual) bergantung pada tindakan pengguna atau integrasi pihak ketiga yang Anda aktifkan sendiri.</li>
            </ul>

            <h3>🛂 Izin (Permissions) yang Diperlukan</h3>
            <p>Untuk menjalankan fungsionalitas utama, aplikasi meminta izin berikut:</p>
            <ul>
                <li><strong>Lokasi (ACCESS_FINE_LOCATION / ACCESS_COARSE_LOCATION)</strong> — diperlukan untuk menentukan posisi pengguna dan menempatkan klaster/plot pada peta.</li>
                <li><strong>Penyimpanan (READ/WRITE_EXTERNAL_STORAGE)</strong> — digunakan saat mengimpor atau mengekspor file (Excel) dan untuk menyimpan berkas yang diunduh seperti APK jika Anda memilih metode instal manual.</li>
                <li><strong>Internet</strong> — diperlukan untuk memuat peta Mapbox, mengambil sumber daya, atau membuka tautan eksternal.</li>
            </ul>
            <p>Catatan: beberapa plugin (mis. untuk memilih gambar atau menangani file) mungkin meminta izin tambahan saat digunakan.</p>

            <h3>🔒 Pengelolaan Izin & Privasi</h3>
            <ul>
                <li>Izin diminta secara runtime pada Android (pengguna akan melihat prompt saat fitur terkait diakses). Anda dapat mencabut izin melalui pengaturan aplikasi sistem kapan saja.</li>
                <li>Untuk mengurangi akses yang tidak perlu, aplikasi hanya meminta izin saat fitur yang relevan digunakan pertama kali.</li>
                <li>Informasi sensitif (seperti lokasi) tetap berada di perangkat kecuali Anda secara eksplisit mengekspor atau membagikannya.</li>
            </ul>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2>📝 Catatan & Petunjuk</h2>

            <p><strong>Perhatian:</strong> Aplikasi Azimutree dikembangkan dan dioptimalkan khusus untuk perangkat Android.</p>

            <h3>🧾 Status Open Source</h3>
            <p>Azimutree merupakan aplikasi <strong>open source</strong>. Kode sumber aplikasi tersedia secara publik di GitHub dan dapat dipelajari, digunakan, serta dikembangkan lebih lanjut sesuai dengan ketentuan lisensi yang berlaku. Pengembang dan peneliti dipersilakan untuk meninjau kode, melakukan modifikasi, serta berkontribusi melalui pelaporan isu atau pengajuan perubahan (pull request).</p>

            <h3>👥 Penggunaan untuk Pengguna Umum</h3>
            <p>Pengguna umum dapat menggunakan Azimutree secara langsung tanpa perlu melakukan konfigurasi teknis tambahan. Fitur-fitur utama aplikasi, termasuk pemetaan dan pengelolaan data, telah disiapkan agar dapat digunakan di lapangan dengan tetap memperhatikan koneksi jaringan serta izin perangkat yang diperlukan.</p>

            <h3>🔗 Layanan Pihak Ketiga</h3>
            <p>Beberapa fitur Azimutree memanfaatkan layanan pihak ketiga, seperti layanan peta, yang telah dikonfigurasi di dalam aplikasi. Pengguna umum tidak perlu mengelola kunci API atau melakukan pengaturan manual untuk menggunakan fitur-fitur tersebut. Bagi pengembang yang ingin menjalankan, membangun ulang, atau memodifikasi Azimutree dari kode sumber, penggunaan layanan pihak ketiga tersebut mungkin memerlukan konfigurasi tambahan sesuai dengan kebijakan masing-masing penyedia layanan.</p>

            <h3>🛠️ Pengembangan & Dokumentasi</h3>
            <p>Panduan instalasi, instruksi pengembangan, serta dokumentasi teknis tersedia di berkas README pada repositori GitHub Azimutree. Disarankan bagi pengembang atau pengguna tingkat lanjut untuk membaca dokumentasi tersebut sebelum melakukan pengembangan lebih lanjut.</p>

            <h3>⚖️ Tanggung Jawab Penggunaan</h3>
            <p>Sebagai perangkat lunak open source, Azimutree dikembangkan secara terbuka dan transparan. Penggunaan aplikasi, termasuk pengelolaan data, pemanfaatan fitur, serta kepatuhan terhadap regulasi yang berlaku, menjadi tanggung jawab masing-masing pengguna.</p>
        </div>
    </section>
<?= $this->endSection() ?>
