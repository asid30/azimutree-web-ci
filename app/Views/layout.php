<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="google-site-verification" content="GXMHZxGwGj0w8a1Bv6mnSBIyeqvFQL0WpJ9P3jbzxHE">
    <title><?= $this->renderSection('title') ?: 'Azimutree' ?></title>
    <meta name="description" content="<?= $this->renderSection('description') ?: 'Azimutree — Android app' ?>">
    <link rel="icon" href="<?= base_url('icon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <?= $this->renderSection('head') ?>
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
                <a class="app-link" href="<?= base_url() ?>">🏠 Beranda</a>
                <a class="app-link" href="<?= base_url('panduan') ?>">📘 Panduan Aplikasi</a>
                <a class="app-link" href="<?= base_url('template') ?>">📄 Template Excel</a>
                <a class="app-link" href="https://saweria.co/asid30" target="_blank" rel="noopener">☕ Dukungan</a>
            </nav>
            <button id="menuToggle" class="menu-btn" aria-label="Toggle menu">☰</button>
        </div>
    </div>
</header>

<!-- Mobile sidebar (toggled by #menuToggle) -->
<nav id="menu" class="mobile-sidebar hidden" aria-hidden="true">
    <div class="container">
        <div class="mobile-sidebar-header"><h3>Menu</h3></div>
        <a class="app-link" href="<?= base_url() ?>">🏠 Beranda</a>
        <a class="app-link" href="<?= base_url('panduan') ?>">📘 Panduan Aplikasi</a>
        <a class="app-link" href="<?= base_url('template') ?>">📄 Template Excel</a>
        <a class="app-link" href="https://saweria.co/asid30" target="_blank" rel="noopener">☕ Dukungan</a>
    </div>
</nav>

<main>
    <?= $this->renderSection('content') ?>
</main>

<footer class="site-footer">
    <div class="container">
        <p>© 2026 Azimutree. Licensed under the MIT License. Dev by Asid30</p>
    </div>
</footer>

<!-- Download Confirmation Modal (kept in layout so pages can trigger it) -->
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
<?= $this->renderSection('scripts') ?>

</body>
</html>
