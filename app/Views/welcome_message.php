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
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Azimutree logo" class="logo" onerror="this.style.display='none'">
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
            <p class="lead">Open-source Android app for browsing and managing content — simple, private, and fast.</p>
            <p class="cta">
                <a id="download" class="btn primary" href="#">Download APK</a>
                <a class="btn ghost" href="#releases">Releases on GitHub</a>
            </p>
            <div class="screenshots">
                <img src="<?= base_url('assets/img/01.png') ?>" alt="Screenshot 1" onerror="this.style.display='none'">
                <img src="<?= base_url('assets/img/02.png') ?>" alt="Screenshot 2" onerror="this.style.display='none'">
                <img src="<?= base_url('assets/img/03.png') ?>" alt="Screenshot 3" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section id="features" class="section">
        <div class="container">
            <h2>A Feature-Packed Experience</h2>
            <ul class="features">
                <li><strong>Privacy First</strong><br>No ads, no trackers, no account required.</li>
                <li><strong>Performance</strong><br>Lightweight and responsive.</li>
                <li><strong>Enhanced Playback</strong><br>Background playback and multiple codecs.</li>
                <li><strong>Powerful Filtering</strong><br>Hide unwanted content easily.</li>
            </ul>
        </div>
    </section>

    <section id="about" class="section muted">
        <div class="container">
            <h2>About Azimutree</h2>
            <p>Azimutree is the official Android client for managing and viewing content. This site hosts APKs, links to releases, and basic documentation for users.</p>
        </div>
    </section>

</main>

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?= date('Y') ?> Azimutree Project. GPLv3 Licensed.</p>
    </div>
</footer>

<script src="<?= base_url('assets/js/app.js') ?>"></script>

</body>
</html>
