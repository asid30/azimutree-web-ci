<?= $this->extend('layout') ?>

<?= $this->section('title') ?>Template Excel<?= $this->endSection() ?>

<?= $this->section('description') ?>Halaman unduh template Excel untuk impor data klaster/plot/pohon.<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="container">
            <h2>Template Excel untuk Azimutree 📄</h2>
            <p>Anda akan mendownload template Excel yang digunakan untuk mengimpor data klaster, plot, dan pohon ke dalam aplikasi Azimutree.</p>
            <p>Pastikan Anda mengikuti format kolom pada template agar proses impor berjalan lancar.</p>
            <div class="template-actions" style="margin-top:1rem">
                <a class="btn primary" href="https://docs.google.com/spreadsheets/d/1EN-vjd3Tn1Q1wAyW599V07c_YIaMHK4fgSvLvuOS3pI/export?format=xlsx" target="_blank" rel="noopener">Klik untuk mendownload template (XLSX)</a>
                <a class="btn ghost" href="<?= base_url() ?>">Kembali</a>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
