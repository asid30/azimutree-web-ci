<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Azimutree — Android app</title>
    <meta name="description" content="Official Azimutree Android app — download, releases, and info">
    <link rel="icon" href="<?= base_url('favicon.ico') ?>">
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

            <div class="screenshots">
                <img src="<?= base_url('assets/1.jpeg') ?>" alt="Screenshot 1" onerror="this.style.display='none'">
                <img src="<?= base_url('assets/2.jpeg') ?>" alt="Screenshot 2" onerror="this.style.display='none'">
                <img src="<?= base_url('assets/3.jpeg') ?>" alt="Screenshot 3" onerror="this.style.display='none'">
                <img src="<?= base_url('assets/4.jpeg') ?>" alt="Screenshot 4" onerror="this.style.display='none'">
                <img src="<?= base_url('assets/5.jpeg') ?>" alt="Screenshot 5" onerror="this.style.display='none'">
                <img src="<?= base_url('assets/6.jpeg') ?>" alt="Screenshot 6" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section id="features" class="section">
        <div class="container">
            <h2>What Azimutree Does</h2>
            <p>Azimutree helps field teams collect and manage forestry survey data using Forest Health Monitoring methods. Key capabilities:</p>
            <ul class="features">
                <li><strong>Mapping Lokasi Pohon</strong><br>Show tree positions within a cluster using azimuth and distance from a plot center.</li>
                <li><strong>Manajemen Data</strong><br>Store clusters, plots and tree records locally with SQLite (offline-first).</li>
                <li><strong>Export & Import</strong><br>Export and import cluster data to/from Excel for analysis and reporting.</li>
            </ul>
        </div>
    </section>

    <section id="about" class="section muted">
        <div class="container">
            <h2>About Azimutree</h2>
            <p>Developed in Flutter, Azimutree is designed for Android. It uses Mapbox for maps and SQLite for local storage. See the project README on GitHub for installation and development instructions.</p>
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
